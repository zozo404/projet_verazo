document.getElementById('members').addEventListener("click", (event)=>{
    event.preventDefault();
    
//L'API Fetch fournit une interface JavaScript pour l'accès et la manipulation 
//des parties de la pipeline HTTP, comme les requêtes et les réponses. 
//Cela fournit aussi une méthode globale fetch() qui procure un moyen facile et 
//logique de récupérer des ressources à travers le réseau de manière asynchrone.

    fetch('http://localhost/projet_verazo/espace_admin/membres.php')
    .then((response) => {
        return response.json()
    }).then((users)=>{
        console.log(users);
        // Parcourir ce tableau d'users avec un for of et afficher ces users dans le html de la page
        let users_html = ''
        for (const user of users) {
            users_html += `<p>${user.nom_users}</p>`
        }
        console.log(users_html);
        document.getElementById('list-users').innerHTML= users_html;
    })
    .catch((error)=>{
        console.log(error)
    })

   


})

document.getElementById('news').addEventListener("click", (event)=>{
    event.preventDefault();

fetch('http://localhost/projet_verazo/espace_admin/news.php')
.then((response) => {
    return response.json()
}).then((news)=>{
    console.log(news);
   
    let news_html = '';
    for (const nouveau of news) {
        news_html += `<p>${nouveau.titre_news}</p>`
    }
    console.log(news_html);
    document.getElementById('list-news').innerHTML= news_html;
})
.catch((error)=>{
    console.log(error)
})

})