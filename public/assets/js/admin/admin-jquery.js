$("#menu-toggle").click(function (e) {
	e.preventDefault();
	$("#wrapper").toggleClass("toggled");
	$(this).toggleClass("active");
});
$("#sidebar-wrapper > .list-group > button").click(function() {
	$("#sidebar-wrapper > .list-group > button").removeClass("active");
	$(this).addClass("active")

	$("#"+$(this).text()).removeClass("d-none").siblings().addClass("d-none");
});

$(document).ready(function () {
	btnArtikel()
	btnKegiatan()
	btnKuliner()
})
$("div.modal-footer > button").on('click', function() {
	$('.modal').modal('hide')
})



function btnArtikel() {
	$(document).on('click', '.btn-insert-artikel', function () {
		$('#modal-artikel-title').text('INSERT ARTIKEL')
		$('#btn-modal-artikel-insert').show().siblings().hide()
		$('.input-artikel').prop('disabled', false)
	});
	$(document).on('click', '.btn-edit-artikel', function () {
		$('#modal-artikel-title').text('EDIT ARTIKEL')
		$('#btn-modal-artikel-edit').show().siblings().hide()
		$('.input-artikel').prop('disabled', false)
	});
	$(document).on('click', '.btn-delete-artikel', function () {
		$('#modal-artikel-title').text('DELETE ARTIKEL')
		$('#btn-modal-artikel-delete').show().siblings().hide()
		$('.input-artikel').prop('disabled', true)
	});
}
function btnKegiatan() {
	$(document).on('click', '.btn-insert-kegiatan', function () {
		$('#modal-kegiatan-title').text('INSERT KEGIATAN')
		$('#btn-modal-kegiatan-insert').show().siblings().hide()
		$('.input-kegiatan').prop('disabled', false)
	});
	$(document).on('click', '.btn-edit-kegiatan', function () {
		$('#modal-kegiatan-title').text('EDIT KEGIATAN')
		$('#btn-modal-kegiatan-edit').show().siblings().hide()
		$('.input-kegiatan').prop('disabled', false)
	});
	$(document).on('click', '.btn-delete-kegiatan', function () {
		$('#modal-kegiatan-title').text('DELETE KEGIATAN')
		$('#btn-modal-kegiatan-delete').show().siblings().hide()
		$('.input-kegiatan').prop('disabled', true)
	});
}
function btnKuliner() {
	$(document).on('click', '.btn-insert-kuliner', function () {
		$('#modal-kuliner-title').text('INSERT KULINER')
		$('#btn-modal-kuliner-insert').show().siblings().hide()
		$('.input-kuliner').prop('disabled', false)
	});
	$(document).on('click', '.btn-edit-kuliner', function () {
		$('#modal-kuliner-title').text('EDIT KULINER')
		$('#btn-modal-kuliner-edit').show().siblings().hide()
		$('.input-kuliner').prop('disabled', false)
	});
	$(document).on('click', '.btn-delete-kuliner', function () {
		$('#modal-kuliner-title').text('DELETE KULINER')
		$('#btn-modal-kuliner-delete').show().siblings().hide()
		$('.input-kuliner').prop('disabled', true)
	});
}