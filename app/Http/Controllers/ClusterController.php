<?php

namespace App\Http\Controllers;

use App\Models\Church;
use App\Models\Chapel;
use App\Models\Cluster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClusterController extends Controller
{
    public function index(Church $church){

        $church->with('chapels.clusters');

        $clusters = $church->chapels->sortBy('chapel_name')->flatMap->clusters->sortBy('cluster_number');

        //order the cluster by chapel->name, cluster_number

        return view('cluster.clusters', ['clusters' => $clusters]);
    }

    public function create(Church $church){
        $church->with('chapels');
        $chapels = $church->chapels;
        return view('cluster.cluster-create', ['chapels' => $chapels]);
    }

    public function store(Request $request){
        $request->validate([
            'cluster_number'    => 'required|integer',
            'cluster_leader'    => 'required|string',
            'chapel_id'         => 'required|integer'
        ]);

        Cluster::create([
            'cluster_number'    => $request->cluster_number,
            'cluster_leader'    => $request->cluster_leader,
            'chapel_id'         => $request->chapel_id
        ]);

        return redirect('/clusters/'. Auth::user()->church->id);
    }
}
