<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\Bank;
use Illuminate\Http\Request;
use App\Repositories\RegisterRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateRegisterRequest;
use App\Http\Requests\UpdateRegisterRequest;

class RegisterController extends AppBaseController
{
    /** @var RegisterRepository $registerRepository*/
    private $registerRepository;

    public function __construct(RegisterRepository $registerRepo)
    {
        $this->registerRepository = $registerRepo;
    }

    /**
     * Display a listing of the Register.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $registers = $this->registerRepository->all();

        return view('registers.index')
            ->with('registers', $registers);
    }

    /**
     * Show the form for creating a new Register.
     *
     * @return Response
     */
    public function create()
    {
        $banks = Bank::pluck('name', 'id');
        return view('registers.create', compact('banks'));
    }

    /**
     * Store a newly created Register in storage.
     *
     * @param CreateRegisterRequest $request
     *
     * @return Response
     */
    public function store(CreateRegisterRequest $request)
    {
        $input = $request->all();

        $register = $this->registerRepository->create($input);

        Flash::success('Register saved successfully.');

        return redirect(route('registers.index'));
    }

    /**
     * Display the specified Register.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //$register with bank
        $register = $this->registerRepository->find($id);

        if (empty($register)) {
            Flash::error('Register not found');

            return redirect(route('registers.index'));
        }

        $text = "Pagar" . ' ' . $register->bank->code . ' ' . $register->phone . ' ' . $register->identifier . ' ';


        return view('qr.pdf', compact('register', 'text'));
    }

    /**
     * Show the form for editing the specified Register.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $register = $this->registerRepository->find($id);

        if (empty($register)) {
            Flash::error('Register not found');

            return redirect(route('registers.index'));
        }

        $banks = Bank::pluck('name', 'id');

        return view('registers.edit', compact('banks', 'register'));
    }

    /**
     * Update the specified Register in storage.
     *
     * @param int $id
     * @param UpdateRegisterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegisterRequest $request)
    {
        $register = $this->registerRepository->find($id);

        if (empty($register)) {
            Flash::error('Register not found');

            return redirect(route('registers.index'));
        }

        $register = $this->registerRepository->update($request->all(), $id);

        Flash::success('Register updated successfully.');

        return redirect(route('registers.index'));
    }

    /**
     * Remove the specified Register from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $register = $this->registerRepository->find($id);

        if (empty($register)) {
            Flash::error('Register not found');

            return redirect(route('registers.index'));
        }

        $this->registerRepository->delete($id);

        Flash::success('Register deleted successfully.');

        return redirect(route('registers.index'));
    }
}
