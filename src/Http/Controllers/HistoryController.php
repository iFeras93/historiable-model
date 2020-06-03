<?php

namespace Iferas93\HistoriableModel\Http\Controllers;


use Iferas93\HistoriableModel\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{

    /**
     * Show History of changes column
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $changelog = History::query()->paginate();
        return view('historiable::index', compact(['changelog']));
    }

    /**
     * Show specific item by ID
     * @param History $history
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        //return $id;
        $changelogById = History::query()->where('id', $id)->first();
        return view('historiable::show', compact(['changelogById']));
    }
}
