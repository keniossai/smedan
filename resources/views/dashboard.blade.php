@extends('layouts.app')


@section('content')
<div class="main-content">
    <div class="row">
      <div class="col-xl-9 col-lg-7">
        <div class="main-content-title-profile mb-50">
          <div class="main-content-title">
            <h3>Hi, {{ Auth::user()->name }}!</h3>
            <img src="assets/img/dashboard/icon/love-icon.svg" alt />
          </div>
          <div class="profile">
            <a href="">
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
        <div class="counter-area">
          <div class="row g-3">
            <div class="col-xl-3 col-md-6">
              <div class="counter-single">
                <div class="counter-icon">
                  <img
                    src="assets/img/dashboard/icon/counter-active-property-icon.svg"
                    alt
                  />
                </div>
                <div class="counter-content">
                  <p>Active Property</p>
                  <div class="number">
                    <h3 class="counter">20</h3>
                    <span>+</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="counter-single two">
                <div class="counter-icon">
                  <img
                    src="assets/img/dashboard/icon/counter-expire-property-icon.svg"
                    alt
                  />
                </div>
                <div class="counter-content">
                  <p>Expire Property</p>
                  <div class="number">
                    <h3 class="counter">30</h3>
                    <span>+</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="counter-single three">
                <div class="counter-icon">
                  <img
                    src="assets/img/dashboard/icon/counter-pending-property-icon.svg"
                    alt
                  />
                </div>
                <div class="counter-content">
                  <p>Pending Property</p>
                  <div class="number">
                    <h3 class="counter">05</h3>
                    <span>+</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="counter-single four">
                <div class="counter-icon">
                  <img
                    src="assets/img/dashboard/icon/counter-delete-property-icon.svg"
                    alt
                  />
                </div>
                <div class="counter-content">
                  <p>Delete Property</p>
                  <div class="number">
                    <h3 class="counter">10</h3>
                    <span>+</span>
                  </div>
                </div>
                <img
                  src="assets/img/dashboard/icon/counter-area-top-vector.svg"
                  alt
                  class="counter-area-vector"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="recent-listing-area">
          <h6>My Recent Post</h6>
          <div class="recent-listing-table">
            <table class="eg-table2">
              <thead>
                <tr>
                  <th>Property Info</th>
                  <th>When Added</th>
                  <th>Favourite</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td data-label="Property Info">
                        <div class="property-info-wrapper">
                            <div class="property-info-img">
                            <img
                                src="{{ asset('storage/post/'.$post->image) }}"
                                alt
                            />
                            </div>
                            <div class="property-info-content">
                            <h6>
                                <a href="property-listing-left-sidebar.html"
                                >{{ $post->title }}</a
                                >
                            </h6>

                            </div>
                        </div>
                        </td>
                        <td data-label="When Added" class="table-product">
                        <span>{{ Str::limit(strip_tags($post->content), 30) }}</span>
                        </td>
                        <td data-label="Favourite">
                        <span>100 person</span>
                        </td>
                        <td data-label="Action">
                        <ul class="action-buttons">
                            <li>
                            <img
                                src="{{ asset('assets/images/icon/action-edit-btn.svg') }}"
                                alt
                            />
                            </li>
                            <li>
                            <img
                                src="{{ asset('assets/images/icon/action-delete-btn.svg') }}"
                                alt
                            />
                            </li>
                        </ul>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            <div class="pagination-area">
              <ul class="paginations">
                <li class="page-item active">
                  <a href="#">1</a>
                </li>
                <li class="page-item">
                  <a href="#">2</a>
                </li>
                <li class="page-item">
                  <a href="#">3</a>
                </li>
              </ul>
              <ul class="paginations-buttons">
                <li>
                  <a href="#">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="7"
                      height="14"
                      viewBox="0 0 7 14"
                    >
                      <path
                        d="M0 7.00008L7 0L2.54545 7.00008L7 14L0 7.00008Z"
                      />
                    </svg>
                    Prev
                  </a>
                </li>
                <li>
                  <a href="#">
                    Next
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="7"
                      height="14"
                      viewBox="0 0 7 14"
                      fill="none"
                    >
                      <path
                        d="M7 7.00008L0 0L4.45455 7.00008L0 14L7 7.00008Z"
                      />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-5">
        <div class="message-area">
          <div class="message-area-title">
            <h6>List of users</h6>
          </div>
          <ul class="message-list">
            <li>
              <div class="author-area">
                <div class="author-img">
                  <img
                    src="assets/img/dashboard/message-author-img1.png"
                    alt
                  />
                </div>
                <div class="author-content">
                  <div class="author-title">
                    <h6>Jacoline Franqly,</h6>
                  </div>
                </div>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>

@endsection
