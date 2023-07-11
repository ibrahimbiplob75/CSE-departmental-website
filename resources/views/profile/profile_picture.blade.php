<x-app-layout>
    <x-slot name="header">
        <a  href="/dashboard" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </a>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>

                        <img src="{{asset('/backend_assets/admin_photo/')}}/{{Auth::user()->profile_photo}}" class="mb-2" style="width:auto;height:auto;">

                    @endif
                    <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf
{{--                        <div class="mb-3">--}}

{{--                            <label class="form-label" for="inputImage">Select Image:</label>--}}

{{--                            <input  type="file" name="image" id="inputImage" class="form-control @error('image') is-invalid @enderror">--}}
{{--                            @error('image')--}}
{{--                            <span class="text-danger">{{ $message }}</span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}

                        <div>
                            <x-input-label for="password" :value="__('Select Image:')" />
                            <x-text-input name="image" id="inputImage" type="file" class="mt-1 block w-full @error('image') is-invalid @enderror" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-4" />
                        </div>

                        <div class="flex items-center gap-4 mt-6">
                            <x-primary-button>{{ __('Save picture') }}</x-primary-button>
                        </div>



                    </form>
                </div>
            </div>





        </div>
    </div>


</x-app-layout>

@section('footer_script')
    @if($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '{{session('success')}}',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif
@endsection

