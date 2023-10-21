@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
       <div class="col-lg-12">
          <div class="main-content-title-profile mb-30">
             <div class="main-content-title">
                <h3>Add Post</h3>
                <img src="assets/img/dashboard/icon/property-listing-icon.svg" alt="">
             </div>
          </div>
       </div>
    </div>
    <div class="add-property-wrapper">
       <div class="add-property-content">
          <div class="row mb-40">
             <div class="col-xxl-12 col-xl-9">
                <div class="add-property-form-wrapper">
                   <div class="add-property-form-title">
                      <h6>Post Information</h6>
                   </div>
                   <form>
                      <div class="row">
                         <div class="col-md-12">
                            <div class="form-inner mb-30">
                               <label>Post Title*</label>
                               <input type="text" placeholder="Type post title">
                            </div>
                         </div>
                         <div class="col-md-12">
                            <div class="form-inner mb-30">
                               <label>Content*</label>
                               <textarea placeholder="Write post content"></textarea>
                            </div>
                         </div>
                         <div class="upload-area">
                            <div class="upload-img-wrapper">
                               <div class="row g-4 mb-25">
                                  <div class="col-lg-6">
                                     <div class="upload-img-field">
                                        <div class="upload-field-title">
                                           <h6>Image</h6>
                                        </div>
                                        <div class="upload-btn-box">
                                           <label class="upload-btn">
                                           <img src="assets/img/dashboard/icon/upload-img-field-icon.svg" alt="">
                                           Upload images
                                           <input type="file" multiple="" data-max_length="20" class="upload-inputfile">
                                           </label>
                                           <p>Max.size 4 mb, jpeg or png *</p>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
