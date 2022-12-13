@extends('layouts.app')
@section('content')

<style>
  th{
    font-weight:bold;
    text-align:center;
  }
  td{
    text-align:center;
  }

  </style>

<div class="main-panel">
<div class="content-wrapper">

    <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">
                    <h2>All CP Concepts</h2>
                  </div>

                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">

                  <a class="btn btn-success mt-2 mt-xl-0" href="{{route('create')}}">Add new concepts</a>
                </div>
              </div>
            </div>
          </div>



            <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Concepts</p>
                  <div class="table-responsive">
                    <table style="border:1px solid rgba(211, 211, 211, 0.5);" class="table">
                    <tr>
                      <td>
                    <table  class="table">
                      <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status report</th>
                            <th>Office</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Jeremy Ortega</td>
                            <td>Levelled up</td>
                            <td>Catalinaborough</td>
                            <td>$790</td>
                            <td>06 Jan 2018</td>
                            <td><button style="width:80px; height:39px; font-size:15px; padding:1px"
                            type="button" class="btn btn-primary">Edit
                          </button>
                            <button style="width:80px; height:39px; font-size:15px; padding:1px" type="button"
                            class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                            <td>Alvin Fisher</td>
                            <td>Ui design completed</td>
                            <td>East Mayra</td>
                            <td>$23230</td>
                            <td>18 Jul 2018</td>
                            <td><button style="width:80px; height:39px; font-size:15px; padding:1px"
                            type="button" class="btn btn-primary">Edit
                          </button>
                            <button style="width:80px; height:39px; font-size:15px; padding:1px" type="button"
                            class="btn btn-danger">Delete</button></td>
                        </tr>
                        <tr>
                            <td>Emily Cunningham</td>
                            <td>support</td>
                            <td>Makennaton</td>
                            <td>$939</td>
                            <td>16 Jul 2018</td>
                            <td><button style="width:80px; height:39px; font-size:15px; padding:1px"
                            type="button" class="btn btn-primary">Edit
                          </button>
                            <button style="width:80px; height:39px; font-size:15px; padding:1px" type="button"
                            class="btn btn-danger">Delete</button></td>
                        </tr>

                      </tbody>
                    </table>
                      </tr>
                        </td>
                     </table>
                  </div>
                </div>
              </div>
            </div>
          </div>




@endsection
