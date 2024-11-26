console.log('hello');

const title = document.querySelector('#title');

const keyframes = {
    opacity: [0, 1],
    translate:['0 10px',0],
};

title.animate(keyframes, 3000);

const image = document.querySelector('#image');

image.animate(keyframes, 3000);


const showimage = (entries) => {
    const keyframes = {
        opacity: [0,1],
        translate: ['200px 0',0],
    };
    //console.log(entries[0].target);   
    entries[0].target.animate(keyframes,600);
};
//プロフィール画像が一度動いたら終了する


const imageObserver = new IntersectionObserver(showimage);

imageObserver.observe(document.querySelector('#image'));


const loadingAreaGrey = document.querySelector('#loading');
const loadingAreaBlue = document.querySelector('#loading-screen');
const loadingText = document.querySelector('#loading p');


window.addEventListener('load', () => {
    loadingAreaGrey.animate(
    {
        opacity: [1, 0],
        visibility: 'hidden',
    },
    {
        duration:2000,
        delay:1200,
        easing:'ease',
        fill:'forwards',
    }
    );

    loadingAreaBlue.animate(
        {
            translate:['0 100vh','0 0','0 -100vh']
        },
        {
            duration:2000,
            delay:800,
            easing:'ease',
            fill:'forwards',
        }
    );


loadingText.animate([
    {
        opacity:1,
        offset: .8
    },
    {
        opacity:0,
        offset: 1
    },

],
    {
        duration:1200,
        easing:'ease',
        fill:'forwards'
    }
);
});

const menuOpen = document.querySelector('#menu-open');
const menuClose = document.querySelector('#menu-close');
const menuPanel = document.querySelector('#menu-panel');
const menuItems = document.querySelectorAll('#menu-panel li');
const menuOptions = {
    duration: 700,
    easing:'ease',
    fill: 'forwards',
};

menuOpen.addEventListener('click',() => {
    //console.log('メニューを開く');
    menuPanel.animate({translate:['100vw', 0]},menuOptions);

menuItems.forEach((menuItem,index) => {
    console.log('${index}番目のリスト');
    menuItem.animate(
        {
            opacity:[0,1],
            translate:['2rem',0],
        },
        {
            duration: 1200,
            delay: 300*index,
            easing:'ease',
            fill:'forwards',
        }
    );
});
});

menuClose.addEventListener('click', () => {
    //console.log('メニューを開く');
    menuPanel.animate({translate:[0, '100vw']},menuOptions);
    menuItems.forEach((menuItem) => {
                menuItem.animate({opacity:[1,0]},menuOptions);
});
});
