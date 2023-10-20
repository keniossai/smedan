{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

</x-app-layout> --}}


@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-content-title-profile mb-50">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Profile Information') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __("Update your account's profile information and email address.") }}
                </p>
            </header>
          <div class="profile">
            <a href="#">
              View Profile
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="8"
                height="8"
                viewBox="0 0 8 8"
              >
                <path
                  d="M6.669 2.27202L0.94102 8L0 7.05898L5.72731 1.331H0.679478V0H8V7.32052H6.669V2.27202Z"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="dashboard-profile-wrapper">
      <div class="dashboard-profile-nav">
        <ul class="nav flex-column nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="profile-tab"
              data-bs-toggle="pill"
              data-bs-target="#profile"
              type="button"
              role="tab"
              aria-controls="profile"
              aria-selected="true"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 14 14"
              >
                <g clip-path="url(#clip0_820_491)">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M12.6272 11.1642C13.4899 10.0005 14 8.55982 14 7C14 3.13398 10.8659 0 7 0C3.13398 0 0 3.13398 0 7C0 10.8659 3.13398 14 7 14C9.0283 14 10.8551 13.1374 12.1336 11.7589C12.3089 11.5698 12.4737 11.3713 12.6272 11.1642ZM12.2391 10.5C12.9092 9.49892 13.2999 8.29508 13.2999 7C13.2999 3.52061 10.4794 0.699985 6.99993 0.699985C3.52061 0.699985 0.699985 3.52061 0.699985 7C0.699985 8.29515 1.09075 9.49892 1.7609 10.5C2.60633 9.23698 3.89638 8.2967 5.40716 7.90313C4.6777 7.39764 4.19999 6.55464 4.19999 5.59996C4.19999 4.05358 5.45362 2.79994 7 2.79994C8.54638 2.79994 9.80002 4.05358 9.80002 5.59996C9.80002 6.55457 9.32223 7.39764 8.59284 7.90305C10.1035 8.2967 11.3937 9.23691 12.2391 10.5ZM11.7882 11.0944C10.8058 9.47898 9.02897 8.39997 7.00007 8.39997C4.97111 8.39997 3.19418 9.47898 2.21179 11.0945C3.36726 12.4445 5.08368 13.3 7 13.3C8.91632 13.3 10.6327 12.4444 11.7882 11.0944ZM7 7.69999C8.15982 7.69999 9.10003 6.75985 9.10003 5.59996C9.10003 4.44013 8.1599 3.49993 7 3.49993C5.84011 3.49993 4.89997 4.44021 4.89997 5.60003C4.89997 6.75985 5.84018 7.69999 7 7.69999Z"
                  />
                </g>
              </svg>
              Profile
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="change-pass-tab"
              data-bs-toggle="pill"
              data-bs-target="#change-pass"
              type="button"
              role="tab"
              aria-controls="change-pass"
              aria-selected="false"
            >
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                <g clip-path="url(#clip0_820_628)">
                  <path d="M4.67075 1.39125C3.83739 1.62092 3.0097 1.87066 2.18838 2.14025C2.11338 2.16454 2.04672 2.20941 1.99598 2.26975C1.94523 2.33008 1.91246 2.40345 1.90138 2.4815C1.41663 6.11888 2.53663 8.77275 3.87275 10.521C4.43846 11.2686 5.11299 11.9272 5.87388 12.4749C6.17663 12.6884 6.44438 12.8424 6.65525 12.9412C6.76025 12.9911 6.846 13.0244 6.91163 13.0445C6.94033 13.0546 6.96992 13.0619 7 13.0664C7.02973 13.0615 7.059 13.0542 7.0875 13.0445C7.15401 13.0244 7.23975 12.9911 7.34475 12.9412C7.55475 12.8424 7.82338 12.6875 8.12613 12.4749C8.88701 11.9272 9.56154 11.2686 10.1273 10.521C11.4634 8.77363 12.5834 6.11888 12.0986 2.4815C12.0877 2.40341 12.0549 2.32999 12.0042 2.26964C11.9534 2.20929 11.8867 2.16445 11.8116 2.14025C11.242 1.95388 10.2804 1.65025 9.32926 1.39213C8.358 1.12875 7.46463 0.933625 7 0.933625C6.53625 0.933625 5.642 1.12788 4.67075 1.39125ZM4.438 0.49C5.38738 0.231875 6.39625 0 7 0C7.60375 0 8.61263 0.231875 9.56201 0.49C10.5333 0.7525 11.5124 1.06312 12.0881 1.25125C12.3288 1.33074 12.5423 1.47653 12.7039 1.67186C12.8654 1.8672 12.9687 2.10415 13.0016 2.3555C13.5231 6.27288 12.313 9.17613 10.8448 11.0968C10.2221 11.9184 9.47975 12.6419 8.64238 13.2431C8.35283 13.4512 8.04605 13.6341 7.72538 13.79C7.48038 13.9055 7.217 14 7 14C6.783 14 6.5205 13.9055 6.27463 13.79C5.95395 13.6341 5.64717 13.4512 5.35763 13.2431C4.52028 12.6419 3.77789 11.9183 3.15525 11.0968C1.687 9.17613 0.47688 6.27288 0.99838 2.3555C1.03136 2.10415 1.13457 1.8672 1.29616 1.67186C1.45775 1.47653 1.67116 1.33074 1.91188 1.25125C2.74767 0.977208 3.58996 0.723384 4.438 0.49Z"/>
                  <path
                    d="M9.4978 4.5028C9.53855 4.54344 9.57087 4.59172 9.59293 4.64487C9.61498 4.69802 9.62633 4.755 9.62633 4.81255C9.62633 4.8701 9.61498 4.92708 9.59293 4.98023C9.57087 5.03338 9.53855 5.08166 9.4978 5.1223L6.8728 7.7473C6.83216 7.78804 6.78388 7.82037 6.73073 7.84242C6.67758 7.86448 6.6206 7.87583 6.56305 7.87583C6.50551 7.87583 6.44853 7.86448 6.39537 7.84242C6.34222 7.82037 6.29394 7.78804 6.2533 7.7473L4.9408 6.4348C4.90013 6.39412 4.86786 6.34583 4.84584 6.29269C4.82383 6.23954 4.8125 6.18258 4.8125 6.12505C4.8125 6.06752 4.82383 6.01056 4.84584 5.95741C4.86786 5.90427 4.90013 5.85598 4.9408 5.8153C4.98148 5.77462 5.02977 5.74236 5.08292 5.72034C5.13606 5.69833 5.19303 5.687 5.25055 5.687C5.30808 5.687 5.36504 5.69833 5.41819 5.72034C5.47134 5.74236 5.51963 5.77462 5.5603 5.8153L6.56305 6.81892L8.8783 4.5028C8.91894 4.46206 8.96722 4.42973 9.02037 4.40768C9.07353 4.38562 9.13051 4.37427 9.18805 4.37427C9.2456 4.37427 9.30258 4.38562 9.35573 4.40768C9.40888 4.42973 9.45716 4.46206 9.4978 4.5028Z"
                  />
                </g>
              </svg>
              Change Password
            </button>
          </li>
        </ul>
      </div>
      <div class="tab-content w-100" id="pills-tabContent">
        <div class="tab-pane fade show active" id="profile" role="tabpanel">
          <div class="dashboard-profile-tab-content">
            <div class="profile-tab-content-title">
              <h6>You Details</h6>
            </div>
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>
            <form method="post" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')
              <div class="row">
                <div class="col-md-6">
                  <div class="form-inner mb-30">
                    <label>Name*</label>
                    <input id="name" name="name" type="text" value="{{ $user->name }}" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-inner mb-30">
                    <label>Email Address*</label>
                    <input id="email" name="email" type="email" value="{{ $user->email }}" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                  </div>
                </div>
              </div>
              <div class="upload-img-area">
                <div class="upload-img-wrapper">
                  <div class="drag-area">
                    <button type="button" class="upload-btn">
                      <i class="bi bi-plus-lg"></i>
                    </button>
                    <input type="file" hidden />
                  </div>
                </div>
                <div class="upload-img-area-content">
                  <h6>Upload Your Image</h6>
                  <p>Image required size 300*300, JPGE or PNG format.</p>
                </div>
              </div>
              <div class="form-inner">
                <button type="submit" class="primary-btn3">
                  Update Change
                </button>
              </div>
            </form>
          </div>
        </div>

        <div class="tab-pane fade" id="change-pass" role="tabpanel">
          <div class="dashboard-profile-tab-content">
            <div class="profile-tab-content-title">
              <h6>Change Your Password</h6>
            </div>
            <form method="POST" action="{{ route('password.update') }}" >
                @csrf
                @method('put')
              <div class="row">
                <div class="col-md-6">
                  <div class="form-inner mb-30">
                    <label>{{ __('Current Password') }}</label>
                    <input id="current_password" name="current_password" type="password" autocomplete="current-password"/>
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-inner mb-30">
                    <label>New Password*</label>
                    <input id="password" name="password" type="password"  autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-inner mb-50">
                    <label>Confirm Password*</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"/>
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                  </div>
                </div>
                <div class="flex items-center gap-4">
                    @if (session('status') === 'password-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600"
                        >{{ __('Saved.') }}</p>
                    @endif
                </div>
              </div>
              <div class="change-password-form-btns">
                <button type="submit" class="primary-btn3">
                  Change Password
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
