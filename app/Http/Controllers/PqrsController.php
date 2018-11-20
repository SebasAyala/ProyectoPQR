<?php

namespace App\Http\Controllers;

use App\DataTables\PqrsDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePqrsRequest;
use App\Http\Requests\UpdatePqrsRequest;
use App\Repositories\PqrsRepository;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class PqrsController extends AppBaseController
{
    /** @var  PqrsRepository */
    private $pqrsRepository;

    public function __construct(PqrsRepository $pqrsRepo)
    {
        $this->pqrsRepository = $pqrsRepo;
    }

    /**
     * Display a listing of the Pqrs.
     *
     * @param PqrsDataTable $pqrsDataTable
     * @return Response
     */
    public function index(PqrsDataTable $pqrsDataTable)
    {
        if (auth::check()) {
            return $pqrsDataTable->render('pqrs.index');
        } else {
            return redirect('/login');
        }
    }

    /**
     * Show the form for creating a new Pqrs.
     *
     * @return Response
     */
    public function create()
    {
        return view('pqrs.create');
    }

    /**
     * Store a newly created Pqrs in storage.
     *
     * @param CreatePqrsRequest $request
     *
     * @return Response
     */
    public function store(CreatePqrsRequest $request)
    {
        $input = $request->all();

        $pqrs = $this->pqrsRepository->create($input);

        Flash::success('Pqrs saved successfully.');
        if (Auth::check()) {
            return redirect(route('pqrs.index'));
        } else {
            return redirect('/');
        }
    }

/**
 * Display the specified Pqrs.
 *
 * @param  int $id
 *
 * @return Response
 */
    public function show($id)
    {
        $pqrs = $this->pqrsRepository->findWithoutFail($id);

        if (empty($pqrs)) {
            Flash::error('Pqrs not found');

            return redirect(route('pqrs.index'));
        }

        return view('pqrs.show')->with('pqrs', $pqrs);
    }

/**
 * Show the form for editing the specified Pqrs.
 *
 * @param  int $id
 *
 * @return Response
 */
    public function edit($id)
    {
        $pqrs = $this->pqrsRepository->findWithoutFail($id);

        if (empty($pqrs)) {
            Flash::error('Pqrs not found');

            return redirect(route('pqrs.index'));
        }

        return view('pqrs.edit')->with('pqrs', $pqrs);
    }

/**
 * Update the specified Pqrs in storage.
 *
 * @param  int              $id
 * @param UpdatePqrsRequest $request
 *
 * @return Response
 */
    public function update($id, UpdatePqrsRequest $request)
    {
        $pqrs = $this->pqrsRepository->findWithoutFail($id);

        if (empty($pqrs)) {
            Flash::error('Pqrs not found');

            return redirect(route('pqrs.index'));
        }

        $pqrs = $this->pqrsRepository->update($request->all(), $id);

        Flash::success('Pqrs updated successfully.');

        return redirect(route('pqrs.index'));
    }

/**
 * Remove the specified Pqrs from storage.
 *
 * @param  int $id
 *
 * @return Response
 */
    public function destroy($id)
    {
        $pqrs = $this->pqrsRepository->findWithoutFail($id);

        if (empty($pqrs)) {
            Flash::error('Pqrs not found');

            return redirect(route('pqrs.index'));
        }

        $this->pqrsRepository->delete($id);

        Flash::success('Pqrs deleted successfully.');

        return redirect(route('pqrs.index'));
    }
}
