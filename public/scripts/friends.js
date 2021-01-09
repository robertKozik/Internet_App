import {fetchData} from "./fetchAPI.js";

const view = $('.content');
const input = document.querySelector('.search-input');
const addEffect = () => {
    $('.profile').on('mouseover mouseout', function() {
        $(this).toggleClass('hover')
    })
}

const display = (response) => {
    view.empty();
    response.forEach( el => {
        view.append(`
                <div class="round">
                    <div class="profile round" id="${el.mortal_id}">
                        <img class="round" src="public/resources/placeholder.jpg" alt="profile photo">
                        <div>
                            <h2>${el.name} ${el.surname}</h2>
                            <h3>${el.nickname}</h3>
                        </div>
                    </div>
                </div>
                `);
    })
    addEffect();
}

document.querySelector('.search-btn').addEventListener('click', async () => {
    const search = input.value;
    const jsonResponse = await fetchData({search: search}, String('/fetchUsers'));
    display(await jsonResponse);
})
addEffect();