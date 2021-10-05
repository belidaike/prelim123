<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesalesRequest;
use App\Http\Requests\UpdatesalesRequest;
use App\Repositories\salesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class salesController extends AppBaseController
{
    /** @var  salesRepository */
    private $salesRepository;

    public function __construct(salesRepository $salesRepo)
    {
        $this->salesRepository = $salesRepo;
    }

    /**
     * Display a listing of the sales.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sales = $this->salesRepository->all();

        return view('sales.index')
            ->with('sales', $sales);
    }

    /**
     * Show the form for creating a new sales.
     *
     * @return Response
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created sales in storage.
     *
     * @param CreatesalesRequest $request
     *
     * @return Response
     */
    public function store(CreatesalesRequest $request)
    {
        $input = $request->all();

        $sales = $this->salesRepository->create($input);

        Flash::success('Sales saved successfully.');

        return redirect(route('sales.index'));
    }

    /**
     * Display the specified sales.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sales = $this->salesRepository->find($id);

        if (empty($sales)) {
            Flash::error('Sales not found');

            return redirect(route('sales.index'));
        }

        return view('sales.show')->with('sales', $sales);
    }

    /**
     * Show the form for editing the specified sales.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sales = $this->salesRepository->find($id);

        if (empty($sales)) {
            Flash::error('Sales not found');

            return redirect(route('sales.index'));
        }

        return view('sales.edit')->with('sales', $sales);
    }

    /**
     * Update the specified sales in storage.
     *
     * @param int $id
     * @param UpdatesalesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesalesRequest $request)
    {
        $sales = $this->salesRepository->find($id);

        if (empty($sales)) {
            Flash::error('Sales not found');

            return redirect(route('sales.index'));
        }

        $sales = $this->salesRepository->update($request->all(), $id);

        Flash::success('Sales updated successfully.');

        return redirect(route('sales.index'));
    }

    /**
     * Remove the specified sales from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sales = $this->salesRepository->find($id);

        if (empty($sales)) {
            Flash::error('Sales not found');

            return redirect(route('sales.index'));
        }

        $this->salesRepository->delete($id);

        Flash::success('Sales deleted successfully.');

        return redirect(route('sales.index'));
    }
}
