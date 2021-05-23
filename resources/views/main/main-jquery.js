
$(document).on('click', '#tombolArtikel', function () {
	$(this).addClass('active font-weight-bold').removeClass('text-success')
	$('#tombolKuliner').addClass('text-success').removeClass('active font-weight-bold')
	$('#tombolKegiatan').addClass('text-success').removeClass('active font-weight-bold')

	$('#isiArtikel').removeClass('danone')
	$('#isiKuliner').addClass('danone')
	$('#isiKegiatan').addClass('danone')
})
$(document).on('click', '#tombolKuliner', function () {
	$(this).addClass('active font-weight-bold').removeClass('text-success')
	$('#tombolArtikel').addClass('text-success').removeClass('active font-weight-bold')
	$('#tombolKegiatan').addClass('text-success').removeClass('active font-weight-bold')

	$('#isiArtikel').addClass('danone')
	$('#isiKuliner').removeClass('danone')
	$('#isiKegiatan').addClass('danone')
})
$(document).on('click', '#tombolKegiatan', function () {
	$(this).addClass('active font-weight-bold').removeClass('text-success')
	$('#tombolArtikel').addClass('text-success').removeClass('active font-weight-bold')
	$('#tombolKuliner').addClass('text-success').removeClass('active font-weight-bold')

	$('#isiArtikel').addClass('danone')
	$('#isiKuliner').addClass('danone')
	$('#isiKegiatan').removeClass('danone')
})

$('#tombolKuliner').addClass('text-success')
$('#tombolKegiatan').addClass('text-success')
$('#tombolArtikel').addClass('active font-weight-bold').removeClass('text-success')
$('#isiKuliner').addClass('danone')
$('#isiKegiatan').addClass('danone')
