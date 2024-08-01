@extends('layouts.backend')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full p-0">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                </h1>
                <nav class="flex-sm-00-auto ml-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="{{ url('tasks') }}">Tasks</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-content block-content-full row">
                <div class="col-sm-12 col-12 pb-5">
                    @if (session('success'))
                        <div class="alert alert-success text-center text-success" id="flashMessage">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger text-center text-danger" id="flashMessage">
                            {{ session('error') }}
                        </div>
                    @endif
                    <x-button-alt-primary type="button" class="float-right mb-3 add_task">
                        <i class="fa fa-fw fa-sign-in-alt  mr-1 opacity-50"></i> Add New Task
                    </x-button-alt-primary>
                    <div id="success_message" class="text-center"></div>
                    <div class="table-responsive" style="overflow-y: hidden">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full w-100">
                            <thead>
                                <tr>
                                    <th class="text-center d-none d-md-table-cell" style="width: 5%">#</th>
                                    <th style="width: 20%">Task Name</th>
                                    <th style="width: 45%">Task Description</th>
                                    <th style="width: 30%">Task Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td>
                                            {{ $task->name }}
                                        </td>
                                        <td>
                                            {{ $task->description}}
                                        </td>
                                        <td>
                                            {!! $task->task_created_at !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>
    <div class="modal fade" id="AddTaskModal" tabindex="-1" aria-labelledby="AddTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="ModalHeaderLabel">Add Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="task_add" action="{{ url('tasks') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row pt-4 pb-4">
                            <div class="col-sm-12 form-group mb-3">
                                <x-label for="name" class="label-control" :value="__('Task Name')" /><span
                                class="text-danger">*</span>
                                <input type="text" class="form-control" name="task_name" id="task_name" placeholder="Enter Task Name">
                            </div>
                            <div class="col-sm-12 form-group mb-3">
                                <x-label for="name" class="label-control" :value="__('Task Description')" /><span
                                class="text-danger">*</span>
                                <textarea class="form-control" name="task_description" id="task_description" placeholder="Enter Task Description" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                        <x-button-alt-primary class="task_add">
                            <i class="fa fa-fw fa-sign-in-alt  mr-1 opacity-50"></i> Add Task
                        </x-button-alt-primary>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
@section('js_after')
    <script src="{{asset('js/pages/tasks.js')}}"></script>
@endsection
