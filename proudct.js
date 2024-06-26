const product = [
    {
        id: 0,
        image: 'vit1.jpg',
        title: 'vit',
        price: 30,
    },
    {
        id: 1,
        image: 'image\\71IBpqoR2AL._AC_UL600_SR600,400_.jpg',
        title: 'care&more  for soft hand',
        price: 60,
    },
    {
        id: 2,
        image: 'image\\61zU2QYCUWL._AC_UL600_SR600,400_.jpg',
        title: 'Eva body splach',
        price: 230,
    },
    {
        id: 3,
        image: 'image\\61tLnL9nNYL._AC_SY879_.jpg',
        title: 'Eva for hand',
        price: 100,
    },
    {
        id: 4,
        image: 'image\\product62.jpg',
        title: 'Loryal cyram',
        price: 300,
    },
    {
        id: 5,
        image: 'image\\71HaZED1euL._AC_UL300_SR300,200_.jpg',
        title: 'santorini shower gel',
        price: 400,
    },
    {
        id: 6,
        image: 'image\\61pzYAyPoEL._AC_UL600_SR600,400_.jpg',
        title: 'Penduline',
        price: 170,
    },
    {
        id: 7,
        image: 'image\\51rqpZ8XyCL.__AC_SX300_SY300_QL70_ML2_.jpg',
        title: 'Eva loshan',
        price: 100,
    },
    {
        id: 8,
        image: 'image\\51FdpatU4XS._AC_SY879_.jpg',
        title: 'bath&body body splach ',
        price: 400,
    },
    {
        id: 9,
        image: 'image\\51coy50SqcL._AC_UL600_SR600,400_.jpg',
        title: 'CYBELE Roge',
        price: 90,
    },
    
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>L.E ${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "L.E "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "L.E "+total+".00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>L.E ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }

    
}