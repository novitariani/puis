

<style>
    .tr-invers {
        background: #0f1f4bc4;
        color: #fff;
    }

    #tableDetailTA .form-control[readonly], .form-tahun-akademik[readonly] {
        cursor: cell;
        background-color: #fff;
        color: #333;
    }

    #tableSPKRS tr th, #tableSPKRS tr td {
        text-align: center;
    }
</style>

<div class="alert alert-info" role="alert">
    <b><span id="nameTahunAkademik"></span></b>
</div>

<!--<input id="formSemesterID" value="--><?php //echo $ID; ?><!--" readonly />-->
<table class="table table-bordered table-striped" id="tableDetailTA">
    <thead>
    <tr class="tr-invers">
        <th rowspan="2" class="th-center">Keterangan</th>
        <th colspan="2" class="th-center">
            Global Setting
        </th>
        <th rowspan="2" class="th-center">Action</th>
    </tr>
    <tr class="tr-invers">
        <th class="th-center">Start</th>
        <th class="th-center">End</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Bayar BPP</td>
        <td>
            <input type="text" id="bpp_start" nextElement="bpp_end" name="regular" class="form-control form-tahun-akademik" readonly>
        </td>
        <td>
            <input type="text" id="bpp_end" name="regular" class="form-control form-tahun-akademik form-next">
        </td>
        <td>
<!--            <a href="javascript:void(0);" data-head="KRS" data-load="prodi" class="btn btn-sm btn-warning btn-block more_details">Special Case</a>-->
            -
        </td>
    </tr>
    <tr>
        <td>Krs</td>
        <td>
            <input type="text" id="krs_start" nextElement="krs_end" name="regular" class="form-control form-tahun-akademik" readonly>
        </td>
        <td>
            <input type="text" id="krs_end" name="regular" class="form-control form-tahun-akademik form-next">
        </td>
        <td>
            <a href="javascript:void(0);" id="idBtnSPKRS" data-head="KRS" data-load="prodi" class="btn btn-sm btn-warning btn-block">Special Case</a>
        </td>
    </tr>
    <tr>
        <td>Bayar SKS</td>
        <td>
            <input type="text" id="bayar_start" nextelement="bayar_end" name="regular" class="form-control form-tahun-akademik">
        </td>
        <td>
            <input type="text" id="bayar_end" name="regular" class="form-control form-tahun-akademik form-next">
        </td>
        <td>
<!--            <a href="javascript:void(0);" data-head="Bayar" data-load="prodi" class="btn btn-sm btn-warning btn-block more_details">Special Case</a>-->
            -
        </td>
    </tr>
    <tr>
        <td>Kuliah</td>
        <td>
            <input type="text" id="kuliah_start" nextelement="kuliah_end" name="regular" class="form-control form-tahun-akademik">
        </td>
        <td>
            <input type="text" id="kuliah_end" name="regular" class="form-control form-tahun-akademik form-next">
        </td>
        <td>
<!--            <a href="javascript:void(0);" data-head="Kuliah" data-load="prodi" class="btn btn-sm btn-warning btn-block more_details">Special Case</a>-->
            -
        </td>
    </tr>
    <tr>
        <td>UTS</td>
        <td>
            <input type="text" id="uts_start" nextelement="uts_end" name="regular" class="form-control form-tahun-akademik">
        </td>
        <td>
            <input type="text" id="uts_end" name="regular" class="form-control form-tahun-akademik form-next">
        </td>
        <td>
<!--            <a href="javascript:void(0);" data-head="UTS" data-load="prodi" class="btn btn-sm btn-warning btn-block more_details">Special Case</a>-->
            -
        </td>
    </tr>
    <tr>
        <td>Input Nilai UTS</td>
        <td>
            <input type="text" id="nilaiuts_start" nextelement="nilaiuts_end" name="regular" class="form-control form-tahun-akademik">
        </td>
        <td>
            <input type="text" id="nilaiuts_end" name="regular" class="form-control form-tahun-akademik form-next">
        </td>
        <td>
            <a href="javascript:void(0);" data-head="Input Nilai UTS" data-type="5.1" class="btn btn-sm btn-warning btn-block more_details">Special Case</a>
        </td>
    </tr>
    <tr>
        <td>Show Nilai UTS</td>
        <td>
            <input type="text" id="show_nilai_uts" nextelement="" name="regular" class="form-control form-tahun-akademik">
        </td>
        <td>

        </td>
        <td></td>
    </tr>
    <tr>
        <td>UAS</td>
        <td>
            <input type="text" id="uas_start" nextelement="uas_end" name="regular" class="form-control form-tahun-akademik">
        </td>
        <td>
            <input type="text" id="uas_end" name="regular" class="form-control form-tahun-akademik form-next">
        </td>
        <td>
            -
        </td>
    </tr>
    <tr>
        <td>Input Nilai UAS</td>
        <td>
            <input type="text" id="nilaiuas_start" nextelement="nilaiuas_end" name="regular" class="form-control form-tahun-akademik">
        </td>
        <td>
            <input type="text" id="nilaiuas_end" name="regular" class="form-control form-tahun-akademik form-next">
        </td>
        <td>
            <a href="javascript:void(0);" data-head="Input Nilai UAS" data-type="8.1" class="btn btn-sm btn-warning btn-block more_details">Special Case</a>
        </td>
    </tr>
    <tr>
        <td>Show Nilai UAS</td>
        <td>
            <input type="text" id="show_nilai_uas" nextelement="" name="regular" class="form-control form-tahun-akademik">
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Edom</td>
        <td>
            <input type="text" id="edom_start" nextelement="edom_end" name="regular" class="form-control form-tahun-akademik">
        </td>
        <td>
            <input type="text" id="edom_end" name="regular" class="form-control form-tahun-akademik form-next">
        </td>
        <td>
            -
        </td>
    </tr>
    </tbody>
</table>

<hr/>
<div style="text-align: right;">
    <a href="<?php echo base_url('academic/tahun-akademik'); ?>" id="btnBack" class="btn btn-info"><i class="fa fa-arrow-circle-left right-margin" aria-hidden="true"></i> Back</a>
    <button class="btn btn-success" id="btnSaveDetail">Save</button>
</div>



<script>
    $(document).ready(function () {
        window.ID = '<?php echo $ID; ?>';
        loadData(ID);
        $('.form-tahun-akademik').prop('readonly',true);
        $( "#bpp_start,#krs_start ,#bayar_start,#kuliah_start,#edom_start," +
            "#uts_start,#show_nilai_uts,#nilaiuts_start," +
            "#uas_start,#nilaiuas_start,#show_nilai_uas" )
            .datepicker({
            showOtherMonths:true,
            autoSize: true,
            dateFormat: 'dd MM yy',
            // minDate: new Date(moment().year(),moment().month(),moment().date()),
            onSelect : function () {
                var data_date = $(this).val().split(' ');
                var nextelement = $(this).attr('nextelement')
                nextDatePick(data_date,nextelement);
            }
        });
    });

    $('#btnSaveDetail').click(function () {

        var data = {
            action : 'edit',
            SemesterID : ID,
            dataForm : {
                SemesterID : ID,
                bayarBPPStart : ($('#bpp_start').datepicker("getDate")!=null) ? moment($('#bpp_start').datepicker("getDate")).format('YYYY-MM-DD') : '',
                bayarBPPEnd : ($('#bpp_end').datepicker("getDate")!=null) ? moment($('#bpp_end').datepicker("getDate")).format('YYYY-MM-DD') : '',
                krsStart : ($('#krs_start').datepicker("getDate")!=null) ? moment($('#krs_start').datepicker("getDate")).format('YYYY-MM-DD') : '',
                krsEnd : ($('#krs_end').datepicker("getDate")!=null) ? moment($('#krs_end').datepicker("getDate")).format('YYYY-MM-DD') : '',
                bayarStart : ($('#bayar_start').datepicker("getDate")!=null) ? moment($('#bayar_start').datepicker("getDate")).format('YYYY-MM-DD') : '',
                bayarEnd : ($('#bayar_end').datepicker("getDate")!=null) ? moment($('#bayar_end').datepicker("getDate")).format('YYYY-MM-DD') : '',
                kuliahStart : ($('#kuliah_start').datepicker("getDate")!=null) ? moment($('#kuliah_start').datepicker("getDate")).format('YYYY-MM-DD') : '',
                kuliahEnd : ($('#kuliah_end').datepicker("getDate")!=null) ? moment($('#kuliah_end').datepicker("getDate")).format('YYYY-MM-DD') : '',
                utsStart : ($('#uts_start').datepicker("getDate")!=null) ? moment($('#uts_start').datepicker("getDate")).format('YYYY-MM-DD') : '',
                utsEnd : ($('#uts_end').datepicker("getDate")!=null) ? moment($('#uts_end').datepicker("getDate")).format('YYYY-MM-DD') : '',
                utsInputNilaiStart : ($('#nilaiuts_start').datepicker("getDate")!=null) ? moment($('#nilaiuts_start').datepicker("getDate")).format('YYYY-MM-DD') : '',
                utsInputNilaiEnd : ($('#nilaiuts_end').datepicker("getDate")!=null) ? moment($('#nilaiuts_end').datepicker("getDate")).format('YYYY-MM-DD') : '',
                showNilaiUts : ($('#show_nilai_uts').datepicker("getDate")!=null) ? moment($('#show_nilai_uts').datepicker("getDate")).format('YYYY-MM-DD') : '',
                uasStart : ($('#uas_start').datepicker("getDate")!=null) ? moment($('#uas_start').datepicker("getDate")).format('YYYY-MM-DD') : '',
                uasEnd : ($('#uas_end').datepicker("getDate")!=null) ? moment($('#uas_end').datepicker("getDate")).format('YYYY-MM-DD') : '',
                uasInputNilaiStart : ($('#nilaiuas_start').datepicker("getDate")!=null) ? moment($('#nilaiuas_start').datepicker("getDate")).format('YYYY-MM-DD') : '',
                uasInputNilaiEnd : ($('#nilaiuas_end').datepicker("getDate")!=null) ? moment($('#nilaiuas_end').datepicker("getDate")).format('YYYY-MM-DD') : '',
                showNilaiUas : ($('#show_nilai_uas').datepicker("getDate")!=null) ? moment($('#show_nilai_uas').datepicker("getDate")).format('YYYY-MM-DD') : '',
                edomStart : ($('#edom_start').datepicker("getDate")!=null) ? moment($('#edom_start').datepicker("getDate")).format('YYYY-MM-DD') : '',
                edomEnd : ($('#edom_end').datepicker("getDate")!=null) ? moment($('#edom_end').datepicker("getDate")).format('YYYY-MM-DD') : ''
            }
        };

        loading_button('#btnSaveDetail');
        $('.form-tahun-akademik,#btnBack').prop('disabled',true);

        var token = jwt_encode(data,'UAP)(*');
        var url = base_url_js+'api/__crudDataDetailTahunAkademik';
        $.post(url,{token:token},function (data) {
            setTimeout(function () {
                $('#btnSaveDetail').prop('disabled',false).html('Save');
                $('.form-tahun-akademik,#btnBack').prop('disabled',false);
            },2000);
        });

    });

    function loadData(ID) {
        var url = base_url_js+'api/__crudDataDetailTahunAkademik';
        var data = {
            action : 'read',
            ID : ID
        }
        var token = jwt_encode(data,'UAP)(*');
        $.post(url,{token:token}, function (data) {
            // console.log(data);
            $('#nameTahunAkademik').html(data.TahunAkademik.Name);

            (data.DetailTA.bayarBPPStart!=='0000-00-00' && data.DetailTA.bayarBPPStart!==null) ? $('#bpp_start').datepicker('setDate',new Date(data.DetailTA.bayarBPPStart)) : '';
            (data.DetailTA.bayarBPPEnd!=='0000-00-00' && data.DetailTA.bayarBPPEnd!==null) ? $('#bpp_end').datepicker({showOtherMonths:true,autoSize: true,dateFormat: 'dd MM yy',
                minDate: new Date(data.DetailTA.bayarBPPStart)}).datepicker('setDate',new Date(data.DetailTA.bayarBPPEnd)) : '';

            (data.DetailTA.krsStart!=='0000-00-00' && data.DetailTA.krsStart!==null) ? $('#krs_start').datepicker('setDate',new Date(data.DetailTA.krsStart)) : '';
            (data.DetailTA.krsEnd!=='0000-00-00' && data.DetailTA.krsEnd!==null) ? $('#krs_end').datepicker({showOtherMonths:true,autoSize: true,dateFormat: 'dd MM yy',
                minDate: new Date(data.DetailTA.krsStart)}).datepicker('setDate',new Date(data.DetailTA.krsEnd)) : '';

            (data.DetailTA.bayarStart!=='0000-00-00' && data.DetailTA.bayarStart!==null) ? $('#bayar_start').datepicker('setDate',new Date(data.DetailTA.bayarStart)) : '';
            (data.DetailTA.bayarEnd !=='0000-00-00' && data.DetailTA.bayarEnd!==null) ? $('#bayar_end').datepicker({showOtherMonths:true,autoSize: true,dateFormat: 'dd MM yy',
                minDate: new Date(data.DetailTA.bayarStart)}).datepicker('setDate',new Date(data.DetailTA.bayarEnd)) : '';

            (data.DetailTA.kuliahStart !=='0000-00-00' && data.DetailTA.kuliahStart !== null) ? $('#kuliah_start').datepicker('setDate',new Date(data.DetailTA.kuliahStart)):'';
            (data.DetailTA.kuliahEnd !=='0000-00-00' && data.DetailTA.kuliahEnd!== null) ? $('#kuliah_end').datepicker({showOtherMonths:true,autoSize: true,dateFormat: 'dd MM yy',
                minDate: new Date(data.DetailTA.kuliahStart)}).datepicker('setDate',new Date(data.DetailTA.kuliahEnd)) : '';

            (data.DetailTA.utsStart !=='0000-00-00' && data.DetailTA.utsStart!==null) ? $('#uts_start').datepicker('setDate',new Date(data.DetailTA.utsStart)) : '';
            (data.DetailTA.utsEnd !=='0000-00-00' && data.DetailTA.utsEnd!==null) ? $('#uts_end').datepicker({showOtherMonths:true,autoSize: true,dateFormat: 'dd MM yy',
                minDate: new Date(data.DetailTA.utsStart)}).datepicker('setDate',new Date(data.DetailTA.utsEnd)) : '';

            (data.DetailTA.utsInputNilaiStart!=='0000-00-00' && data.DetailTA.utsInputNilaiStart!==null) ? $('#nilaiuts_start').datepicker('setDate',new Date(data.DetailTA.utsInputNilaiStart)) : '';
            (data.DetailTA.utsInputNilaiEnd !=='0000-00-00' && data.DetailTA.utsInputNilaiEnd!==null) ? $('#nilaiuts_end').datepicker({showOtherMonths:true,autoSize: true,dateFormat: 'dd MM yy',
                minDate: new Date(data.DetailTA.utsInputNilaiStart)}).datepicker('setDate',new Date(data.DetailTA.utsInputNilaiEnd)) : '';

            (data.DetailTA.showNilaiUts !=='0000-00-00' && data.DetailTA.showNilaiUts!==null) ? $('#show_nilai_uts').datepicker('setDate',new Date(data.DetailTA.showNilaiUts)) : '';

            (data.DetailTA.uasStart!=='0000-00-00' && data.DetailTA.uasStart!==null) ? $('#uas_start').datepicker('setDate',new Date(data.DetailTA.uasStart)) : '';
            (data.DetailTA.uasEnd !=='0000-00-00' && data.DetailTA.uasEnd!==null) ? $('#uas_end').datepicker({showOtherMonths:true,autoSize: true,dateFormat: 'dd MM yy',
                minDate: new Date(data.DetailTA.uasStart)}).datepicker('setDate',new Date(data.DetailTA.uasEnd)) : '';

            (data.DetailTA.uasInputNilaiStart !=='0000-00-00' && data.DetailTA.uasInputNilaiStart!==null) ? $('#nilaiuas_start').datepicker('setDate',new Date(data.DetailTA.uasInputNilaiStart)) : '';
            (data.DetailTA.uasInputNilaiEnd !=='0000-00-00' && data.DetailTA.uasInputNilaiEnd!==null) ? $('#nilaiuas_end').datepicker({showOtherMonths:true,autoSize: true,dateFormat: 'dd MM yy',
                minDate: new Date(data.DetailTA.uasInputNilaiStart)}).datepicker('setDate',new Date(data.DetailTA.uasInputNilaiEnd)) : '';

            (data.DetailTA.showNilaiUas !=='0000-00-00' && data.DetailTA.showNilaiUas!==null) ? $('#show_nilai_uas').datepicker('setDate',new Date(data.DetailTA.showNilaiUas)) : '';

            (data.DetailTA.edomStart !=='0000-00-00' && data.DetailTA.edomStart!==null) ? $('#edom_start').datepicker('setDate',new Date(data.DetailTA.edomStart)) : '';
            (data.DetailTA.edomEnd !=='0000-00-00' && data.DetailTA.edomEnd !==null) ? $('#edom_end').datepicker({showOtherMonths:true,autoSize: true,dateFormat: 'dd MM yy',
                minDate: new Date(data.DetailTA.edomStart)}).datepicker('setDate',new Date(data.DetailTA.edomEnd)) : '';

        });
    }

    function nextDatePick(value,nextElement) {

        // $('#'+nextElement).prop('disabled',false);

        var data_date = value;
        var CustomMoment = moment(data_date[2]+'-'+(parseInt(convertDateMMtomm(data_date[1])) + 1)+'-'+data_date[0]).add(1,'days');
        var CustomMomentYear = CustomMoment.year();
        var CustomMomentMonth = CustomMoment.month();
        var CustomMomentDate = CustomMoment.date();

        $( "#"+nextElement ).val('');
        $( "#"+nextElement ).datepicker( "destroy" );
        $( "#"+nextElement ).datepicker({
            showOtherMonths:true,
            autoSize: true,
            dateFormat: 'dd MM yy',
            minDate: new Date(CustomMomentYear,CustomMomentMonth,CustomMomentDate)
        });
    }

</script>

<script>
    $('#idBtnSPKRS').click(function () {

        loadDataSPKRS();

        var dataBody = '<div class="well">' +
            '    <div class="row">' +
            '        <div class="col-xs-12">' +
            '            <div class="form-group">' +
            '                <label>Prodi</label>' +
            '                <select class="form-control" id="formProdi_SPKRS"></select>' +
            '            </div>' +
            '        </div>' +
            '        <div class="col-xs-6">' +
            '            <label>Start</label>' +
            '            <input id="formStart_SPKRS" class="form-control form-tahun-akademik" readonly>' +
            '        </div>' +
            '        <div class="col-xs-6">' +
            '            <label>End</label>' +
            '            <input id="formEnd_SPKRS" class="form-control form-tahun-akademik" readonly>' +
            '           <button id="btnSave_SPKRS" class="btn btn-primary" style="float: right;margin-top:15px;">Save</button>' +
            '        </div>' +
            '    </div>' +
            '</div>' +
            '<div class="row">' +
            '    <div class="col-xs-12">' +
            '        <table class="table table-bordered" id="tableSPKRS">' +
            '            <thead>' +
            '            <tr style="background: #437e88;color: #ffffff;">' +
            '                <th style="width: 15%;">Prodi</th>' +
            '                <th>Start</th>' +
            '                <th>End</th>' +
            '                <th style="width: 15%;">Act</th>' +
            '            </tr>' +
            '            </thead>' +
            '           <tbody id="dataTrSPKRS"></tbody>' +
            '        </table>' +
            '    </div>' +
            '</div>';

        $('#GlobalModal .modal-header').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close">' +
            '<span aria-hidden="true">&times;</span></button>' +
            '<h4 class="modal-title">Special Case - KRS</h4>');
        $('#GlobalModal .modal-body').html(dataBody);
        $('#GlobalModal .modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>');

        $('#formProdi_SPKRS').empty();
        $('#formProdi_SPKRS').append('<option value="" disabled selected>--- Select Program Study ---</option>' +
            '<option disabled>------------------------------------------</option>');
        loadSelectOptionBaseProdi('#formProdi_SPKRS','');

        $('#formStart_SPKRS').datepicker({
            showOtherMonths:true,
            autoSize: true,
            dateFormat: 'dd MM yy',
            // minDate: new Date(moment().year(),moment().month(),moment().date()),
            onSelect : function () {
                var data_date = $(this).val().split(' ');
                nextDatePick(data_date,'formEnd_SPKRS');
            }
        });

        $('#GlobalModal').modal({
            'show' : true,
            'backdrop' : 'static'
        });
    });

    function loadDataSPKRS() {

        var url = base_url_js+'api/__crudDataDetailTahunAkademik';
        var data = {
            action : 'readSCKRS',
            SemesterID : ID
        };

        var token = jwt_encode(data,'UAP)(*');
        $('#dataTrSPKRS').empty();
        $.post(url,{token:token},function (jsonResult) {

            if(jsonResult.length>0){
                for(var i=0;i<jsonResult.length;i++){
                    var d = jsonResult[i];
                    $('#dataTrSPKRS').append('<tr id="rwTr'+d.ID+'">' +
                        '<td>'+d.Code+'</td>' +
                        '<td>'+moment(d.Start).format('DD MMM YYYY')+'</td>' +
                        '<td>'+moment(d.End).format('DD MMM YYYY')+'</td>' +
                        '<td><button data-id="'+d.ID+'" class="btn btn-danger btn-delete-aysc-krs"><i class="fa fa-trash" aria-hidden="true"></i></button></td>' +
                        '</tr>');
                    $('#formProdi_SPKRS option[value="'+d.ProdiID+'.'+d.Code+'"]')
                        .prop('disabled',true).css('background','#00800040');
                }
            }
        });

    }
</script>