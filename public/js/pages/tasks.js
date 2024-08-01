
$(document).ready(function () {
    $('.js-dataTable-full').dataTable({
        pageLength: 5
    });
    $('.add_task').on("click", function () {
        $("#task_add")[0].reset();
        $("#AddTaskModal").find('form').attr('id',"task_add");
        $("#AddTaskModal").modal("show");
    });
    setTimeout(function() {
        $('#flashMessage').fadeOut('fast');
    }, 3000);
});
$(function () {
    $.validator.setDefaults({
        submitHandler: function (form) {
            form.submit();
        }
    });
    $("#task_add").validate({
        rules: {
            task_name: {
                required: true,
            },
            task_description: {
                required: true,
            }
        },
        messages: {
            task_name: {
                required: "Please enter task name.",
            },
            task_description: {
                required: "Please enter task description.",
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});

