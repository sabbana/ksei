<?php

namespace App\Repositories;

use App\Models\KseiOutgoingLogs;

class KseiRepository {

	public function detail($id) {
		$result = KseiOutgoingLogs::where('id', $id)->first();
		if (!$result) { return false;}
		
		$result = $result->toArray();
		return $result;
	}


	public function insert($data) {
		$result = KseiOutgoingLogs::create($data);
		return $result;
	}

	public function list($limit = 10, $page = 1, $sort = "", $q = "", $params_extra = []) {
		$query = KseiOutgoingLogs::select();
		$query->select();
		if (!empty($params_extra)) {
			$query->where($params_extra);
		}
		$total = $query->count();

		if ($q != "") {
			$query->where(function ($query) use ($q) {
				return $query->where('method_ksei', 'like', "%$q%");
			});
		}
		if ($sort != "") {
			$sort = explode(':', $sort);
			$query->orderBy($sort[0],@$sort[1]);
		}
		$total_filtered = $query->count();
		$limit = ($limit == -1) ? 10 : $limit;
		if (!is_null($limit)) {
			$offset = ($page - 1) * $limit;
			$query->offset($offset)->limit($limit);
		}
		$data = $query->get()->map(function($value){
			return $value;
		});
		return [
			'data' => $data,
			'total_rows' => $total,
			'total_filtered' => $total_filtered,
		];
	}

}
