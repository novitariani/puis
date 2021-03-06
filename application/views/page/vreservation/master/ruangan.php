<div class="" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-12">
            <div class="widget box">
                <div class="widget-header">
                    <h4><i class="icon-reorder"></i> Classroom</h4>
                    <div class="toolbar no-padding">
                        <div class="btn-group">
                            <span class="btn btn-xs" style="background: #083f88;color: #fff;">
                                <strong>
                                    <span id="totalRoom"></span> Room
                                </strong>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="widget-content no-padding" id="viewClassroom"></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        loadDataClassroom();
    });

    // ----- Classroom --------
    $(document).on('click','.btn-classroom',function () {
        var action = $(this).attr('data-action');
        var classroom = (action=='edit' || action=='delete') ? $(this).attr('data-form').split('|') : '';
        var ID = (action=='edit' || action=='delete') ? classroom[0] : '';
        var Room = (action=='edit' || action=='delete') ? classroom[1] : '';
        var Seat = (action=='edit') ? parseInt(classroom[2]) : '';
        var SeatForExam = (action=='edit') ? parseInt(classroom[3]) : '';
        var DeretForExam = (action=='edit') ? parseInt(classroom[4]) : '';
        var LectureDesk = (action=='edit') ? classroom[5] : '';
        
        if(action=='add' || action=='edit'){
            <?php $positionMain = $this->session->userdata('PositionMain'); 
                $positionMain = $positionMain['IDDivision'];
            ?>
            <?php if ($positionMain == 12): ?>
                var readonly = '';
            <?php else: ?>
                var readonly = (action=='edit')? 'readonly' : '';
            <?php endif ?>
            $('#GlobalModal .modal-header').html('<h4 class="modal-title">Classroom</h4>');
            $('#GlobalModal .modal-body').html('<div class="row">' +
                '                            <div class="col-xs-4">' +
                '                                <div class="form-group"><label>Room</label>' +
                '                                <input type="text" class="form-control" value="'+Room+'" '+readonly+' style="color:#333;" id="formRoom">' +
                '                            </div></div>' +
                '                            <div class="col-xs-4">' +
                '                                <div class="form-group"><label>Seat</label>' +
                '                                <input type="number" class="form-control" value="'+Seat+'" id="formSeat">' +
                '                            </div></div>' +
                '                            <div class="col-xs-4">' +
                '                                <div class="form-group"><label>Seat For Exam</label>' +
                '                                <input type="number" class="form-control" value="'+SeatForExam+'" id="formSeatForExam">' +
                '                            </div></div>' +
                '                            <div class="col-xs-4">' +
                '                                <div class="form-group"><label>Deret For Exam</label>' +
                '                                <input type="number" class="form-control" value="'+DeretForExam+'" id="formDeretForExam" min = "2" max = "10">' +
                '                            </div></div>' +
                '                            <div class="col-xs-4">' +
                '                                <div class="form-group"><label>Lecture Desk</label>' +
                '                                   <select id = "formLectureDesk" class="form-control">'+
                '                                          <option value = "left">Left</option>'+
                '                                          <option value = "right">Right</option>'+
                '                                   </select>'+
                '                            </div></div>' +
                                             '<div class="col-xs-4">'+
                                                '<div class="form-group"><label class="control-label">Layout:</label>'+
                                                 '<input type="file" data-style="fileinput" id="ExFile">'+
                                                 '</div>'+
                                             '</div>'+
                '                        </div>');
            $('#GlobalModal .modal-footer').html('<button type="button" id="btnCloseClassroom" class="btn btn-default" data-dismiss="modal">Close</button>' +
                '<button type="button" class="btn btn-success" data-id="'+ID+'" data-action="'+action+'" id="btnSaveClassroom">Save</button>');
            $('#GlobalModal').modal({
                'show' : true,
                'backdrop' : 'static'
            });

            // console.log(action);

            if(action == 'edit')
            {
                console.log(LectureDesk);
                $("#formLectureDesk option").filter(function() {
                   //may want to use $.trim in here
                   return $(this).val() == LectureDesk; 
                 }).prop("selected", true);
            }
        }
        else {
            $('#NotificationModal .modal-body').html('<div style="text-align: center;">Hapus <b style="color: red;">'+Room+'</b>  ?? | ' +
                '<button type="button" id="btnDeleteClassroom" data-id="'+ID+'" class="btn btn-primary" style="margin-right: 5px;">Yes</button>' +
                '<button type="button" id="btnTidak" class="btn btn-default" data-dismiss="modal">No</button>' +
                '</div>');
            $('#NotificationModal').modal('show');
        }

    });
    $(document).on('click','#btnSaveClassroom',function () {

        var action = $(this).attr('data-action');
        var ID = $(this).attr('data-id');

        var process = true;

        var Room = $('#formRoom').val(); process = (Room=='') ? errorInput('#formRoom') : true ;
        var Seat = $('#formSeat').val(); var processSeat = (Seat!='' && $.isNumeric(Seat) && Math.floor(Seat)==Seat) ? true : errorInput('#formSeat') ;
        var SeatForExam = $('#formSeatForExam').val(); var processSeatForExam = (SeatForExam!='' && $.isNumeric(SeatForExam) && Math.floor(SeatForExam)==SeatForExam) ? true : errorInput('#formSeatForExam') ;
        var DeretForExam = $('#formDeretForExam').val(); var processDeretForExam = (DeretForExam!='' && $.isNumeric(DeretForExam) && Math.floor(DeretForExam)==DeretForExam) ? true : errorInput('#formDeretForExam') ;
        var LectureDesk = $('#formLectureDesk').val(); process = (LectureDesk=='') ? errorInput('#formLectureDesk') : true ;

        if(Room!='' && processSeat && processSeatForExam){
            $('#formRoom,#formSeat,#formSeatForExam,#btnCloseClassroom').prop('disabled',true);
            loading_button('#btnSaveClassroom');
            loading_page('#viewClassroom');

            var data = {
                action : action,
                ID : ID,
                formData : {
                    Room : Room,
                    Seat : Seat,
                    SeatForExam : SeatForExam,
                    DeretForExam : DeretForExam,
                    Status : 0,
                    UpdateBy : sessionNIP,
                    UpdateAt : dateTimeNow(),
                    LectureDesk : LectureDesk
                }
            };

            // var token = jwt_encode(data,'UAP)(*');
            // var url = base_url_js+"api/__crudClassroom";

            // $.post(url,{token:token},function (data_result) {

            //     loadDataClassroom();

            //     setTimeout(function () {

            //         if(data_result.inserID!=0) {
            //             toastr.success('Data tersimpan','Success!');
            //             $('#GlobalModal').modal('hide');
            //             // if(action=='add'){$('#formRoom,#formSeat,#formSeatForExam').val('');}
            //         } else {
            //             $('#formRoom,#formSeat,#formSeatForExam,#btnCloseClassroom').prop('disabled',false);
            //             $('#btnSaveClassroom').prop('disabled',false).html('Save');
            //             toastr.warning('Room is exist','Warning');
            //         }
            //     },1000);

            // });

            var form_data = new FormData();
            var fileData = document.getElementById("ExFile").files[0];
            var url = base_url_js + "api/__crudClassroomVreservation"
            var token = jwt_encode(data,"UAP)(*");
            form_data.append('token',token);
            form_data.append('fileData',fileData);
            $.ajax({
              type:"POST",
              url:url,
              data: form_data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              contentType: false,       // The content type used when sending data to the server.
              cache: false,             // To unable request pages to be cached
              processData:false,
              dataType: "json",
              success:function(data_result)
              {
                    loadDataClassroom();

                   setTimeout(function () {

                       if(data_result.inserID!=0) {
                           toastr.success('Data tersimpan','Success!');
                           $('#GlobalModal').modal('hide');
                           // if(action=='add'){$('#formRoom,#formSeat,#formSeatForExam').val('');}
                       } else {
                           $('#formRoom,#formSeat,#formSeatForExam,#btnCloseClassroom').prop('disabled',false);
                           $('#btnSaveClassroom').prop('disabled',false).html('Save');
                           toastr.warning('Room is exist','Warning');
                       }
                   },1000);

              },
              error: function (data) {
                toastr.error("Connection Error, Please try again", 'Error!!');
                $('#btnSaveClassroom').prop('disabled',false).html('Save');
              }
            })

        } else {
            toastr.error('Form Required','Error!');
        }
    });

    $(document).on('click','#btnDeleteClassroom',function () {
        var ID = $(this).attr('data-id');
        var token = jwt_encode({action:'delete',ID:ID},'UAP)(*');
        var url = base_url_js+"api/__crudClassroomVreservation";

        $('#btnTidak').prop('disabled',true);
        loading_buttonSm('#btnDeleteClassroom');
        $.post(url,{token:token},function () {
            loadDataClassroom();
            setTimeout(function () {
                toastr.success('Data Terhapus','Success!');
                $('#NotificationModal').modal('hide');
            });
        });
    });
    function loadDataClassroom() {
        var token = jwt_encode({action:'read'},"UAP)(*");
        var url = base_url_js+'api/__crudClassroomVreservation';
        $.post(url,{token:token},function (json_result) {
            // console.log(json_result);

            if(json_result.length>0){
                $('#viewClassroom').html('<table class="table table-bordered" id="tbClassroom">' +
                    '                        <thead>' +
                    '                        <tr>' +
                    '                            <th class="th-center" style="width:5px;">No</th>' +
                    '                            <th class="th-center" style="width: ">Class</th>' +
                    '                            <th class="th-center">Seat</th>' +
                    '                            <th class="th-center">Seat For Exam</th>' +
                    '                            <th class="th-center">Deret For Exam</th>' +
                    '                            <th class="th-center">Lecture Desk</th>' +
                    '                            <th class="th-center">Layout</th>' +
                    '                            <th class="th-center" style="width: 110px;">Action</th>' +
                    '                        </tr>' +
                    '                        </thead>' +
                    '                        <tbody id="dataClassroom"></tbody>' +
                    '                    </table>');

                var tr = $('#dataClassroom');
                var no=1;
                for(var i=0;i<json_result.length;i++){
                    var data = json_result[i];

                    $('#totalRoom').text(json_result.length);
                    tr.append('<tr>' +
                        '<td class="td-center">'+(no++)+'</td>' +
                        '<td class="td-center">'+data.Room+'</td>' +
                        '<td class="td-center">'+data.Seat+'</td>' +
                        '<td class="td-center">'+data.SeatForExam+'</td>' +
                        '<td class="td-center">'+data.DeretForExam+'</td>' +
                        '<td class="td-center">'+data.LectureDesk+'</td>' +
                        '<td class="td-center">'+'<a href="'+base_url_js+'fileGetAny/vreservation-'+data.Layout+'" target="_blank"></i>Click Default Layout</a>'+'</td>' +
                        '<td class="td-center">' +
                        '<button class="btn btn-default btn-default-success btn-classroom btn-edit" data-action="edit" data-form="'+data.ID+'|'+data.Room+'|'+data.Seat+'|'+data.SeatForExam+'|'+data.DeretForExam+'|'+data.LectureDesk+'"><i class="fa fa-pencil" aria-hidden="true"></i></button> ' +
                        ' <button class="btn btn-default btn-default-danger btn-classroom btn-delete" data-action="delete" data-form="'+data.ID+'|'+data.Room+'"><i class="fa fa-trash-o" aria-hidden="true"></i></button>' +
                        '</td>' +
                        '</tr>');
                }

                $('#tbClassroom').DataTable({
                    "sDom": "<'row'<'dataTables_header clearfix'<'col-md-3'><'col-md-9'f>r>>t<'row'<'dataTables_footer clearfix'<'col-md-12'p>>>", // T is new
                    'bLengthChange' : false,
                    'bInfo' : false,
                    'pageLength' : 7
                });

                $('.dataTables_header .col-md-3').html('<button class="btn btn-default btn-default-primary btn-classroom btn-add" data-action="add"><i class="fa fa-plus-circle fa-right" aria-hidden="true"></i> Add Classroom</button>');
            }


        });
    }
</script>