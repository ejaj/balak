<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalakController extends Controller
{
    protected $pageTitle;
    protected $pageDesc;
    protected $hostUrl;

    /**
     * BalakController constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->pageTitle = $request->route()->getName();
        $description = $request->route()->getAction();
        $this->pageDesc = isset($description['desc']) ? $description['desc'] : $this->pageTitle;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['page_title'] = $this->pageTitle;
        return view('index', $data);
    }

}
