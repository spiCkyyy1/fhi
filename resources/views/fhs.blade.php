@extends('layouts.app')

@section('css')
    <link href="{{asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/buttons.bootstrap.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.brighttheme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.buttons.min.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
                <div class="page-header">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Table-Row-Select</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card alert">
                        <div class="card-header">
                            <h4>Financial Health Survey</h4>
                            <div class="card-header-right-icon">
                                <ul>
                                    <li class="card-close" data-dismiss="alert">
                                        <i class="ti-close"></i>
                                    </li>
                                    <li class="doc-link">
                                        <a href="#"><i class="ti-link"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bootstrap-data-table-panel">
                            <div class="table-responsive">
                                <table class="table-options" cellspacing="0">
                                    <tbody>
                                    <tr>
                                        <td id="ext-gen305">
                                            <table
                                                border="0"
                                                cellpadding="0"
                                                cellspacing="0"
                                                class="x-btn-wrap x-btn x-btn-text-icon"
                                                id="ext-comp-1226"
                                                style="width: auto;"
                                            >
                                                <tbody>
                                                <tr>
                                                    <td class="x-btn-center">
                                                        <button
                                                            type="button"
                                                            class="btn btn-danger btn-flat btn-addon m-b-10 m-l-5"
                                                        >
                                                            <i class="ti-trash"></i>Clear Answers
                                                        </button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td style="width: 100%;">
                                            <div class="ytb-spacer" id="ext-gen314"></div>
                                        </td>
                                        <td id="ext-gen316">
                                            <table
                                                border="0"
                                                cellpadding="0"
                                                cellspacing="0"
                                                class="x-btn-wrap x-btn x-btn-text-icon"
                                                id="ext-comp-1227"
                                                style="width: auto;"
                                            >
                                                <tbody>
                                                <tr>
                                                    <td class="x-btn-center">
                                                        <button
                                                            type="button"
                                                            class="btn btn-primary btn-flat btn-addon m-b-10 m-l-5"
                                                        >
                                                            <i class="ti-bar-chart-alt"></i>View
                                                            Report
                                                        </button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="display table table-borderd table-hover">
                                    <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($questions as $question)
                                    <tr>
                                        <td class="x-grid3-col x-grid3-cell x-grid3-td-0 x-grid3-cell-first" style="width: 184px;" tabindex="0">
                                            <div class="x-grid3-cell-inner x-grid3-col-0" unselectable="on">
                                                {{$question->id}}
                                            </div>
                                        </td>
                                        <td class="x-grid3-col x-grid3-cell x-grid3-td-1" style="white-space: normal; width: 1394px;" tabindex="0">
                                            <div class="x-grid3-cell-inner x-grid3-col-1" unselectable="on">
                                                {{$question->question}}
                                            </div>
                                        </td>
                                        <td class="x-grid3-col x-grid3-cell x-grid3-td-2 x-grid3-cell-last" style="width: 314px;" tabindex="0">
                                            <div class="x-grid3-cell-inner x-grid3-col-2" unselectable="on">
                                                <select class="form-control" onchange="updateAnswer({{$question->id}}, this)">
{{--                                                    <option disabled selected value>--}}
{{--                                                        -- select an option ----}}
{{--                                                    </option>--}}
                                                    <option @if(!empty($question->userAnswers) && $question->userAnswers->answer == 'Yes') selected @endif value="Yes">Yes</option>
                                                    <option @if(!is_null($question->userAnswers) && $question->userAnswers->answer == 'Maybe') selected @endif value="Maybe">MayBe</option>
                                                    <option @if(!is_null($question->userAnswers) && $question->userAnswers->answer == 'No') selected @endif value="No">No</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Number</th>
                                        <th>Question</th>
                                        <th class="text-center">Answer</th>
                                    </tr>
                                    </tfoot>
                                </table>
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="page-nation text-center">--}}
{{--                                            <ul class="pagination pagination-large">--}}
{{--                                                <li class="disabled"><span>«</span></li>--}}
{{--                                                <li class="active"><span>1</span></li>--}}
{{--                                                <li><a href="#">2</a></li>--}}
{{--                                                <li class="hidden-xs"><a href="#">3</a></li>--}}
{{--                                                <li class="hidden-xs"><a href="#">4</a></li>--}}
{{--                                                <li class="hidden-xs"><a href="#">6</a></li>--}}
{{--                                                <li class="hidden-xs"><a href="#">7</a></li>--}}
{{--                                                <li class="hidden-xs"><a href="#">8</a></li>--}}
{{--                                                <li class="hidden-xs"><a href="#">9</a></li>--}}
{{--                                                <li class="disabled hidden-xs">--}}
{{--                                                    <span>...</span>--}}
{{--                                                </li>--}}
{{--                                                <li></li>--}}
{{--                                                <li><a rel="next" href="#">Next</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->

{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="footer">--}}
{{--                        <p>--}}
{{--                            This dashboard was generated on--}}
{{--                            <span id="date-time"></span>--}}
{{--                            <a href="#" class="page-refresh">Refresh Dashboard</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </section>
    </div>
@endsection


@section('js')
    <script src="{{asset('js/datatables.min.js')}}"></script>
{{--    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>--}}
    <script src="{{asset('js/dataTables.buttons.min.js')}}"></script>
{{--    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>--}}
    <script src="{{asset('js/jszip.min.js')}}"></script>
    <script src="{{asset('js/pdfmake.min.js')}}"></script>
    <script src="{{asset('js/vfs_fonts.js')}}"></script>
    <script src="{{asset('js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('js/buttons.print.min.js')}}"></script>
    <script src="{{asset('js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('js/datatables-init.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.buttons.min.js"></script>
    <script type="text/javascript">
        function updateAnswer(question_id, answer){
            $.post('/updateAnswer', {
                "_token": "{{ csrf_token() }}",
                question_id: question_id,
                answer: answer.value
            }, function(data, stauts){
               // if(status == 'success'){
                   PNotify.removeAll();
                   new PNotify({
                       title: 'Success',
                       text: 'User Answer Updated Successfully.',
                       type: 'success'
                   });

               // }
            }).error(function(data, status){
                PNotify.removeAll();
                new PNotify({
                    title: 'Error',
                    text: 'Sorry, something went wrong.',
                    type: 'error'
                });
            });
        }
    </script>
@endsection
