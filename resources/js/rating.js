$( document ).ready(function() {
    $(document).on('click', '.btn.voting-wjt__button[data-action="plus"]', async function () {
        let id = $(this).parent().attr('data-id');
        let url = `http://skeleton.test/posts/${id}/plus`;
        let response = await fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if (response.ok) { // если HTTP-статус в диапазоне 200-299
                           // получаем тело ответа (см. про этот метод ниже)
            let text = await response.text();
            console.log(text);
            $(this).siblings('span').text(`+${text}`);
            // console.log($(this));
        } else {
            alert("Ошибка HTTP: " + response.status);
        }
    });

    $(document).on('click', '.btn.voting-wjt__button[data-action="minus"]', async function () {
        let id = $(this).parent().attr('data-id');
        let url = `http://skeleton.test/posts/${id}/minus`;
        let response = await fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if (response.ok) { // если HTTP-статус в диапазоне 200-299
            // получаем тело ответа (см. про этот метод ниже)
            let text = await response.text();
            console.log(text);
            $(this).siblings('span').text(`+${text}`);
        } else {
            alert("Ошибка HTTP: " + response.status);
        }
    });
});
