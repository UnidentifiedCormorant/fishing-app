<?php

namespace App\Http\Controllers\Fish;

use App\Domain\DTO\Fish\StoreData;
use App\Domain\Enums\Fish\RatingEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Fish\StoreRequest;
use App\Models\Fish\Fish;
use App\Services\Abstracts\FishServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FishController extends Controller
{
    public function __construct(
        private FishServiceInterface $fishService,
    )
    {
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('fish.index',
            ['fish' => $this->fishService->index()]
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('fish.create',
            ['ratings' => RatingEnum::toList()]
        );
    }

    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $this->fishService->store(StoreData::from($request));

        return redirect()->route('fish.index');
    }

    /**
     * @param Fish $fish
     * @return View
     */
    public function show(Fish $fish): View
    {
        return view('fish.show',
            ['fish' => $fish]
        );
    }

    /**
     * @param Fish $fish
     * @return View
     */
    public function edit(Fish $fish): View
    {
        return view('fish.edit',
            [
                'fish' => $fish,
                'ratings' => RatingEnum::toList()
            ]
        );
    }

    /**
     * @param Fish $fish
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function update(Fish $fish, StoreRequest $request): RedirectResponse
    {
        $this->fishService->update($fish, StoreData::from($request));

        return redirect()->route('fish.index');
    }

    /**
     * @param Fish $fish
     * @return RedirectResponse
     */
    public function destroy(Fish $fish): RedirectResponse
    {
        $this->fishService->destroy($fish);

        return redirect()->route('fish.index');
    }
}
