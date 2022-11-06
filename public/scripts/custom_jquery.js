
$(document).ready(function () {
    var date = new Date();
    date.setDate(date.getDate());

    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1,
        startDate: date
    });
    var optionValues = [];
    var groupValues = [];

    $("#fileType").hide();
    $('input:radio[name="contact_upload_type"]').change(function () {
        if ($(this).val() == 'raw') {
            $("#rawType").show();
            $("#fileType").hide();
        } else {
            $("#rawType").hide();
            $("#fileType").show();
        }
    });


    $("#createnewgroup").submit(function (e) {
        var form = $(this);
        var url = form.attr('action');
        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (data)
            {
                var recentgrp = '<div class="grp" data-id="' + data.id + '">' + data.name + '</div>';
                $("#sortGroup").append(recentgrp);

                var grpName = "<span class='tag label label-info'>" + data.name + " <span  class='removeGroup' data-role='remove' data-id='" + data.id + "'></span></span>";
                optionValues.push(grpName);
                groupValues.push(data.id);
                var uniqueGroupName = optionValues.filter(function (itm, i, a) {
                    return i == optionValues.indexOf(itm);
                });
                var uniqueGroupID = groupValues.filter(function (itm, i, a) {
                    return i == groupValues.indexOf(itm);
                });
                $('#result').html(uniqueGroupName);
                $('#cgroups').val(uniqueGroupID);
                $('#creategroup').modal('hide');
            },
            error: function (data)
            {
                console.log(data);
            },

        });
        e.preventDefault();
        e.stopPropagation();
    });

    $("#maskdiv").hide();
    $('#maskSel').change(function () {
        if ($(this).val() == '1') {
            $("#maskdiv").show();
            $("#nonmaskdiv").hide();
            $("#masksenderid").attr("required", "true");
            $("#nonmasksenderid").removeAttr('required');
        } else {
            $("#maskdiv").hide();
            $("#nonmaskdiv").show();
            $("#nonmasksenderid").attr("required", "true");
            $("#masksenderid").removeAttr('required');
        }
    });


    $("#group-contact").hide();
    $("#file-contact").hide();
    $('input[name="upload_type"]').change(function () {
        if ($(this).val() == 'existinggroup') {
            $("#raw-contact").hide();
            $("#group-contact").show();
            $("#file-contact").hide();
        } else if ($(this).val() == 'file') {
            $("#group-contact").hide();
            $("#raw-contact").hide();
            $("#file-contact").show();
        } else {
            $("#group-contact").hide();
            $("#raw-contact").show();
            $("#file-contact").hide();
        }
    });


    $('.grp').click(function () {
        var grpName = "<span class='tag label label-info'>" + $(this).html() + " <span  class='removeGroup' data-role='remove' data-id='" + $(this).attr('data-id') + "'></span></span>";
        optionValues.push(grpName);
        groupValues.push($(this).attr('data-id'));
        var uniqueGroupName = optionValues.filter(function (itm, i, a) {
            return i == optionValues.indexOf(itm);
        });
        var uniqueGroupID = groupValues.filter(function (itm, i, a) {
            return i == groupValues.indexOf(itm);
        });
        $("#sortGroup").toggleClass("show");
        $('#result').html(uniqueGroupName);
        $('#cgroups').val(uniqueGroupID);
    });

    $(document).on("click", ".removeGroup", function () {
        var dataid = $(this).attr('data-id');
        var str = "<span class='tag label label-info'>" + $(this).parent().html() + "</span>";

        optionValues.splice($.inArray(str, optionValues), 1);
        $(this).parent().remove();

        groupValues.splice($.inArray(dataid, groupValues), 1);
        var uniqueGroupID = groupValues.filter(function (itm, i, a) {
            return i == groupValues.indexOf(itm);
        });
        $('#cgroups').val(uniqueGroupID);
    });


});