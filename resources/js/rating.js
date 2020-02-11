const myHeaders = new Headers();
myHeaders.append('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));

$( document ).ready(function() {
    $(document).on('click', '.btn.voting-wjt__button', async function () {
        let id = $(this).parent().data('id');
        let action = $(this).data('action');
        let url = `/posts/${id}/${action}`;

        let response = await fetch(url, {
            method: 'POST',
            headers: myHeaders,
        });

        if (response.ok) { // если HTTP-статус в диапазоне 200-299
            let json = await response.json();   // получаем тело ответа
            $(this).siblings('span').text(json['rating']);
        } else {
            alert("Ошибка HTTP: " + response.status);
        }
    });
});
