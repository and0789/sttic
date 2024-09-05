<x-admin.app-layout title="{{ $page_meta['title'] }}">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> {{ $page_meta['title'] }} </h4>

        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ $page_meta['title'] }}</h5>
                <div class="card-body">

                    <form action="{{ $page_meta['url'] }}" method="post" class="mb-1">
                        @method($page_meta['method'])
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Campus</label>
                            <input
                                type="text"
                                value="{{ old('campus_name'), $campus->campus_name }}"
                                class="form-control"
                                id="campus_name"
                            />
                            @error('campus_name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Singkatan Nama Campus</label>
                            <input
                                type="text"
                                value="{{ old('abbreviated_name'), $campus->abbreviated_name }}"
                                class="form-control"
                                id="abbreviated_name"
                            />
                            @error('abbreviated_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Logo Kampus</label>
                            <input class="form-control" type="file" id="campus_logo"/>
                            @error('campus_logo')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email Kampus</label>
                            <input
                                type="email"
                                value="{{ old('email'), $campus->email }}"
                                class="form-control"
                                id="email"
                                placeholder="name@example.com"
                            />
                            @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No Telepon Kampus</label>
                            <input
                                type="number"
                                value="{{ old('campus_telephone'), $campus->campus_telephone }}"
                                class="form-control"
                                id="campus_telephone"
                            />
                            @error('campus_telephone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat Kampus</label>
                            <textarea class="form-control" id="address" rows="3"> {{ old('address'), $campus->address }} </textarea>
                            @error('address')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Twitter Kampus</label>
                            <input
                                type="text"
                                class="form-control"
                                id="campus_twitter"
                            />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Instagram Kampus</label>
                            <input
                                type="text"
                                class="form-control"
                                id="campus_instagram"
                            />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Linked In Kampus</label>
                            <input
                                type="text"
                                class="form-control"
                                id="campus_linkedin"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Youtube Kampus</label>
                            <input
                                type="text"
                                class="form-control"
                                id="campus_youtube"
                            />
                        </div>

                        <hr class="my-6"/>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary">{{ $page_meta['submit_text'] }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.app-layout>

