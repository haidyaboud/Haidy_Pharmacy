const allstar=document.querySelectorAll('.Rating.star')
allstar.forEach((item,idx)=>{
    item.addEventListener('click',function(){
        let click=0
        ratingvalue.value=idx+1;
        console.log(ratingvalue.value)

        allstar.forEach(i=>{
            i.classList.replace('bxs-star','bx-star')
            allstar[i].classList.remove('active')

        })
        for(let i=0;i<allstar.length;i++){
            if(i<=idx){
                allstar[i].classList.replace('bx-star','bxs-star')
                allstar[i].classList.add('active')

            }else{
                allstar[i+1].Style.setProperty('--i',click)
                click++
            }
        }


    })

})