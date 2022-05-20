

for(let star of document.querySelectorAll('.nes-icon')){

    star.addEventListener('click', function(event){
        console.log(event.target.getAttribute('data-chiffre'))

        switch(event.target.getAttribute('data-chiffre')){
            case 'un':
                event.target.classList.add('is-large')
                event.target.classList.add('star')
                event.target.classList.remove('is-empty')
                // Vider toutes les autres etoires
                document.querySelector('#star-deux').classList.add('is-empty')
                document.querySelector('#star-trois').classList.add('is-empty')
                document.querySelector('#star-quatre').classList.add('is-empty')
                document.querySelector('#star-cinq').classList.add('is-empty')
                break;
            case 'deux':
                event.target.classList.add('is-large')
                event.target.classList.add('star')
                event.target.classList.remove('is-empty') 
                document.querySelector('#star-un').classList.add('is-large')
                document.querySelector('#star-un').classList.add('star')
                document.querySelector('#star-un').classList.remove('is-empty')
                document.querySelector('#star-trois').classList.add('is-empty')
                document.querySelector('#star-quatre').classList.add('is-empty')
                document.querySelector('#star-cinq').classList.add('is-empty')
                break;
            case 'trois':
                event.target.classList.add('is-large')
                event.target.classList.add('star')
                event.target.classList.remove('is-empty') 
                document.querySelector('#star-un').classList.add('is-large')
                document.querySelector('#star-un').classList.add('star')
                document.querySelector('#star-un').classList.remove('is-empty')
                document.querySelector('#star-deux').classList.add('is-large')
                document.querySelector('#star-deux').classList.add('star')
                document.querySelector('#star-deux').classList.remove('is-empty')
                document.querySelector('#star-quatre').classList.add('is-empty')
                document.querySelector('#star-cinq').classList.add('is-empty')
                break;
            case 'quatre':
                event.target.classList.add('is-large')
                event.target.classList.add('star')
                event.target.classList.remove('is-empty') 
                document.querySelector('#star-un').classList.add('is-large')
                document.querySelector('#star-un').classList.add('star')
                document.querySelector('#star-un').classList.remove('is-empty')
                document.querySelector('#star-deux').classList.add('is-large')
                document.querySelector('#star-deux').classList.add('star')
                document.querySelector('#star-deux').classList.remove('is-empty')
                document.querySelector('#star-trois').classList.add('is-large')
                document.querySelector('#star-trois').classList.add('star')
                document.querySelector('#star-trois').classList.remove('is-empty')
                document.querySelector('#star-cinq').classList.add('is-empty')

                break;
            case 'cinq':
                event.target.classList.add('is-large')
                event.target.classList.add('star')
                event.target.classList.remove('is-empty') 
                document.querySelector('#star-un').classList.add('is-large')
                document.querySelector('#star-un').classList.add('star')
                document.querySelector('#star-un').classList.remove('is-empty')
                document.querySelector('#star-deux').classList.add('is-large')
                document.querySelector('#star-deux').classList.add('star')
                document.querySelector('#star-deux').classList.remove('is-empty')
                document.querySelector('#star-trois').classList.add('is-large')
                document.querySelector('#star-trois').classList.add('star')
                document.querySelector('#star-trois').classList.remove('is-empty')
                document.querySelector('#star-quatre').classList.add('is-large')
                document.querySelector('#star-quatre').classList.add('star')
                document.querySelector('#star-quatre').classList.remove('is-empty')
                break;
        }

    })

}







      