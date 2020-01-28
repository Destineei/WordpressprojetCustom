let categories = document.querySelectorAll('.tags>a')
let articles = document.querySelectorAll('article.news-article')


let articlesArray = Array.prototype.slice.call(document.querySelectorAll('article.news-article'));



// for ( var i = 0; i < articlesArray.length ; i++){
//     let article = articlesArray[i];
//     console.log(article.classList)

    
for ( var i = 0; i < categories.length; i++){
    let theCategory = categories[i]
    theCategory.addEventListener('click', function(event){
        
        for ( var i = 0; i < articlesArray.length ; i++)
        {
            let article = articlesArray[i];
            // console.log(article.classList)

        if (article.classList.contains(theCategory.classList.toString())){
            article.classList.add('display');
        }
        else {article.classList.remove('display');}
    }
})
}



        
        
    // }




// function fdex(){
//     if

// }

// for ( var i = 0; i < categories.length; i++){
//     let theCategory = categories[i]
//     console.log(theCategory)
//     theCategory.addEventListener('click', function(event){
//         console.log(theCategory)
//         if article.classList.contains('theCategory'){
//             console.log('yeah')
//         }
//     })
// }




// li catList afficher en html = cePutainDeTruc



// categories.addEventListener('mousedown', function(event){
//     event.console.log('click')
//     for ( let categoriesClick of categories ){
//         categoriesClick.addEventListener('click', function(event){
//             console.log(identificateur);
//         })
//     }
//     // if (element.classList.includes())
// })



