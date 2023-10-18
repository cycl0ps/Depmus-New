/*!
 * Custom Javascript for Bootstrap Admin BSB Material Design 
 * 
 * Crafted by: 
 * Xaverius Najoan      xnajoan@gmail.com
 * 
 *
 *
 */
 $(function () {
    //Tooltip
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });
    //Widgets count
    $('.count-to').countTo();
    $('.datepicker').datepicker({
        format: "yyyy-mm-dd",
    });       
    $(".clickable-row").click(function() {
        window.location = $(this).data("url");
    });
    //Get from API
    if (typeof urlApi !== 'undefined') {
        getDataApi('member', urlApi);
    }    
    //Generate graphs
    if (typeof graphs !== 'undefined') {
        for (var i = 0; i < graphs.length; i++) {
            getMorris(graphs[i].type, graphs[i].element, graphs[i].data, graphs[i].param);
        } 
    }
});
// DataTable pada tabel spesifik. (JQuery Plugin: JQuery DataTable)
$(function () {
    $('.tabelLagu').DataTable({
        responsive: true,
        "pageLength": 25,
        "order": []
    });
    $('.tabelMember').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        "pageLength": 50,
        "order": [],
        buttons: [
            'excel', 'pdf', 'print'
        ]
    });
    $('.tabelIbadah').DataTable({
        responsive: true,
        "pageLength": 25,
        "order": []
    });
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        "pageLength": 100,
        buttons: [
            'excel', 'pdf', 'print'
        ]
    });
});
//Modal Function
$(function () {
    // Modal form Lagu
    $('#modalFormLagu').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var form = button.data('form');
        var id = button.data('id');
        $(this).find('form')[0].reset();
        
        if (form == "formTambah") {
        	$(this).find('form').attr('action', window.location.href + '/tambah');
            $(this).find(':submit').addClass('buttonTambah').removeClass('buttonEdit');
            $(this).find('.modal-title').text('Tambah Lagu');
        }
        else if (form == "formEdit") {
            $(this).find(':submit').addClass('buttonEdit').removeClass('buttonTambah');
            $(this).find('form').attr('action', window.location.href + '/edit');
            $(this).find('.modal-title').text('Edit Lagu');
            $.ajax({
                url : window.location.href + '/detail/' + id + '/json',
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('form [name="id"]').val(data.id);
                    $('form [name="judul"]').val(data.judul);
                    $('form [name="kunci"]').val(data.kunci);
                    $('form [name="tempo"]').val(data.tempo);
                    $('form [name="tema"]').val(data.tema);
                    $('form [name="artist"]').val(data.artist);
                    $('form [name="youtube"]').val(data.youtube);
                    $('form [name="lirik"]').val(data.lirik);
					if (data.kategori == 'Praise'){
						$('form').find(':radio[name=kategori][value="Praise"]').prop('checked', true)
					} else {
						$('form').find(':radio[name=kategori][value="Worship"]').prop('checked', true)
					} 
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    });
    // Modal form Kelola user
    $('#modalFormUser').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var form = button.data('form');
        $(this).find('form')[0].reset();
        $('form [name="id"]').val('');
        $('form [name="password"]').prop("required",false);
        $('.pass-empty').text('');
        if (form == "formTambah") {
            $(this).find('form').attr('action', window.location.href + '/tambah');
            $(this).find(':submit').addClass('buttonTambah').removeClass('buttonEdit');
            $(this).find('.modal-title').text('Tambah User');
            $('form [name="password"]').prop("required",true);
        }
        else if (form == "formEdit") {
            $(this).find(':submit').addClass('buttonEdit').removeClass('buttonTambah');
            $(this).find('form').attr('action', window.location.href + '/edit');
            $(this).find('.modal-title').text('Edit User');
            $(this).find('.pass-empty').text('Biarkan kosong, jika tidak ingin mengganti password');
            $.ajax({
                url : window.location.href + '/detail/' + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('form [name="id"]').val(data.userId);
                    $('form [name="nama"]').val(data.nama);
                    $('form [name="username"]').val(data.username);
                    $('form [name="grup"]').selectpicker('val',data.grup);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    });
    $('#modalFormMember').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var form = button.data('form');
        $(this).find('form')[0].reset();
        $('form [name="id"]').val('');
        $(".fotoprofil img:last-child").remove();
        $('.foto-empty').text('');
        if (form == "formTambah") {
            $(this).find('form').attr('action', window.location.href + '/tambah');
            $(this).find(':submit').addClass('buttonTambah').removeClass('buttonEdit');
            $(this).find('.modal-title').text('Tambah Data Anggota');
        }
        else if (form == "formEdit") {
            $(this).find(':submit').addClass('buttonEdit').removeClass('buttonTambah');
            $(this).find('form').attr('action', window.location.href + '/edit');
            $(this).find('.modal-title').text('Edit Data Anggota');
            $(this).find('.foto-empty').text('Biarkan kosong, jika tidak ingin mengganti foto profil');
            $.ajax({
                url : window.location.href + '/detail/' + id + '/json',
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('form [name="id"]').val(data.id);
                    $('form [name="nama"]').val(data.nama);
                    $('form [name="alamat"]').val(data.alamat);
                    $('form [name="tempatLahir"]').val(data.tempatLahir);
                    $('form [name="tglLahir"]').val(data.tglLahir);
                    $('form [name="hp"]').val(data.hp);
                    $('form [name="email"]').val(data.email);
                    $('form [name="kkj"]').val(data.kkj);
                    $('form [name="alamat"]').val(data.alamat);
                    $('form [name="status"]').selectpicker('val',data.status);
                    if (data.gender == 'Laki-laki'){
                        $('form').find(':radio[name=gender][value="Laki-laki"]').prop('checked', true)
                    } else {
                        $('form').find(':radio[name=gender][value="Perempuan"]').prop('checked', true)
                    }
                    if (data.menikah == 'Sudah Menikah'){
                        $('form').find(':radio[name=menikah][value="Sudah Menikah"]').prop('checked', true)
                    }
                    
                    $(".fotoprofil").append('<img src="' + data.foto + '">');
                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    }); 
    $('#modalFormIbadah').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var form = button.data('form');
        $(this).find('form')[0].reset();
        $('form [name="id"]').val('');
        if (form == "formTambah") {
            $(this).find('form').attr('action', window.location.href + '/tambah');
            $(this).find(':submit').addClass('buttonTambah').removeClass('buttonEdit');
            $(this).find('.modal-title').text('Tambah Data Ibadah');
        }
        else if (form == "formEdit") {
            $(this).find(':submit').addClass('buttonEdit').removeClass('buttonTambah');
            $(this).find('form').attr('action', window.location.href + '/edit');
            $(this).find('.modal-title').text('Edit Data Ibadah');
            $.ajax({
                url : window.location.href + '/detail/' + id + '/json',
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('form [name="id"]').val(data.idIbadah);
                    $('form [name="nama"]').val(data.namaIbadah);
                    $('form [name="kategori"]').selectpicker('val',data.kategoriIbadah);
                    $('form [name="tglIbadah"]').val(data.tglIbadah);                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    });
});
// Script untuk hapus data via AJAX request (JQuery Plugin: SweetAlert)
$(function () {
    $('#tabelData').on('click', ".buttonHapus", function() {
        var id = $(this).data('id');
        swal({
            title: "Apakah anda yakin?",
            text: "Data ini akan dihapus?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sangat yakin!",
            closeOnConfirm: false,
        }, function() {
            $.ajax({
                type: "POST",
                url : window.location.href + '/delete/',
                data: {'id':id},
            })
            .done(function() {
                swal({
                    title: "Berhasil", 
                    text: "Berhasil dihapus",
                    type: "success"
                },function() {
                    location.reload();
                });
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                swal("Gagal", "Gagal dihapus!", "error");
            });
        });    
    });
    $('#tabelBidang').on('click', ".buttonHapus", function() {
        var id = $(this).data('id');
        swal({
            title: "Apakah anda yakin?",
            text: "Anggota ini akan dihapus dari bidang?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yakin!",
            closeOnConfirm: false,
        }, function() {
            $.ajax({
                type: "POST",
                url : window.location.hostname + '../../../delete_bidang/',
                data: {'idMemBid':id},
            })
            .done(function() {
                swal({
                    title: "Berhasil", 
                    text: "Berhasil dihapus",
                    type: "success"
                },function() {
                    location.reload();
                });
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                swal("Gagal", "Gagal dihapus!", "error");
            });
        });    
    });
});
// Script untuk getDataApi
function getDataApi(type, url) {
    if (type === 'member') {
        var urlApi = url;
        $(function () {
            var delay = (function(){
                var timer = 0;
                return function(callback, ms){
                    clearTimeout (timer);
                    timer = setTimeout(callback, ms);
                };
            })();
            $('#modalFormMemberBidang').on("keyup",'.form-control',function() {
            
                var data   = $('#idMember').val();
                $('#loader').empty();
                $('#loader').append('<i class="fa fa-spinner fa-spin"></i>');
                $('#respon').empty();
                
                delay(function() {          
                    $.ajax({
                        type: 'POST',
                        url: urlApi + data + '/json',
                        data: {id:data},
                        dataType:'json',
                        success: function(data) {
                            $('#loader').empty().append('<span class="fa fa-check"></span>');
                            $('#loader').parents('.entry').removeClass('has-error').addClass('has-success');
                            $('#respon').append(data.nama);
                        },
                        
                        error: function(error) {
                            $('#loader').empty().append('<span class="fa fa-remove"></span>');
                            $('#loader').parents('.entry').removeClass('has-success').addClass('has-error');
                            $('#respon').append('ID Tidak ditemukan!');
                        }
                    }); 
                }, 1000);   
            });
            
        });
    }
}
// Script untuk chart (JQuery Plugin: MorrisChart)
function getMorris(type, element, data, param) {
    if (type === 'line') {
        Morris.Line({
            element: element,
            data: data,
            xkey: param.xkey,
            ykeys: param.ykeys,
            labels: param.labels,
            lineColors: param.lineColors,
            lineWidth: param.lineWidth,
            pointSize: param.pointSize,
            pointFillColors: param.pointFillColors,
            pointStrokeColors: param.pointStrokeColors,
            ymax: param.ymax,
            ymin: param.ymin,
            smooth: param.smooth,
            hideHover: param.hideHover,
            hoverCallback: param.hoverCallback,
            parseTime: param.parseTime,
            postUnits: param.postUnits,
            preUnits: param.preUnits,
            dateFormat: param.dateFormat,
            xlabels: param.xlabels,
            xLabelFormat: param.xLabelFormat,
            xLabelAngle: param.xLabelAngle,
            yLabelFormat: param.yLabelFormat,
            goals: param.goals,
            goalStrokeWidth: param.goalStrokeWidth,
            goalLineColors: param.goalLineColors,
            events: param.events,
            eventStrokeWidth: param.eventStrokeWidth,
            eventLineColors: param.eventLineColors,
            continuousLine: param.continuousLine,
            axes: param.axes,
            grid: param.grid,
            gridTextColor: param.gridTextColor,
            gridTextSize: param.gridTextSize,
            gridTextFamily: param.gridTextFamily,
            gridTextWeight: param.gridTextWeight,
            fillOpacity: param.fillOpacity,
            resize: param.resize,
        });
    } else if (type === 'bar') {
        Morris.Bar({
            element: element,
            data: data,
            xkey: param.xkey,
            ykeys: param.ykeys,
            yLabelFormat: function(y){return y != Math.round(y)?'':y;},
            labels: param.labels,
            barColors: param.barColors,
            stacked: true,
            hideHover: param.hideHover,
            hoverCallback: param.hoverCallback,
            axes: param.axes,
            grid: param.grid,
            gridTextColor: param.gridTextColor,
            gridTextSize: param.gridTextSize,
            gridTextFamily: param.gridTextFamily,
            gridTextWeight: param.gridTextWeight,
            resize: param.resize,
        });
    } else if (type === 'area') {
        Morris.Area({
            element: element,
            data: data,
            xkey: param.xkey,
            ykeys: param.ykeys,
            labels: param.labels,
            lineColors: param.lineColors,
            lineWidth: param.lineWidth,
            pointSize: param.pointSize,
            pointFillColors: param.pointFillColors,
            pointStrokeColors: param.pointStrokeColors,
            ymax: param.ymax,
            ymin: param.ymin,
            smooth: param.smooth,
            hideHover: param.hideHover,
            hoverCallback: param.hoverCallback,
            parseTime: param.parseTime,
            postUnits: param.postUnits,
            preUnits: param.preUnits,
            dateFormat: param.dateFormat,
            xlabels: param.xlabels,
            xLabelFormat: param.xLabelFormat,
            xLabelAngle: param.xLabelAngle,
            yLabelFormat: param.yLabelFormat,
            goals: param.goals,
            goalStrokeWidth: param.goalStrokeWidth,
            goalLineColors: param.goalLineColors,
            events: param.events,
            eventStrokeWidth: param.eventStrokeWidth,
            eventLineColors: param.eventLineColors,
            continuousLine: param.continuousLine,
            axes: param.axes,
            grid: param.grid,
            gridTextColor: param.gridTextColor,
            gridTextSize: param.gridTextSize,
            gridTextFamily: param.gridTextFamily,
            gridTextWeight: param.gridTextWeight,
            fillOpacity: param.fillOpacity,
            resize: param.resize,
            behaveLikeLine: param.behaveLikeLine,
        });
    } else if (type === 'donut') {
        Morris.Donut({
            element: element,
            data: data,
            colors: param.colors,
            formatter: function (y) {
                return y
            }
        });
    }
}