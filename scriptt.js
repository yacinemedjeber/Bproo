const product=[
    {
        id: 0,
        image: 'images/product1.png',
        title: 'Smart Watch',
        price: '2000',
        N_telephone: '0541523013'
    },
    {
        id: 1,
        image: 'images/product2.png',
        title: 'T-Chirt Noir',
        price: '2000'
    },
    {
        id: 2,
        image: 'images/product3.png',
        title: 'T-Chirt',
        price: '1600'
    },
    {
        id: 3,
        image: 'images/product4.png',
        title: 'Chaussettes',
        price: '150'
    },
    {
        id: 4,
        image: 'images/product5.png',
        title: 'Basket All Star',
        price: '8000'
    },
    {
        id: 5,
        image: 'images/product6.png',
        title: 'Smart Watch',
        price: '7000'
    },
    {
        id: 6,
        image: 'images/product7.png',
        title: 'AirPods noir',
        price: '2500'
    },
    {
        id: 7,
        image: 'images/product8.png',
        title: 'Casque Noir',
        price: '3200'
    },
    {
        id: 8,
        image: 'images/product9.png',
        title: 'Basket  Nike Air Force',
        price: '20000'
    },
    {
        id: 9,
        image: 'images/product10.png',
        title: 'Casque Rouge',
        price: '3200'
    },
    {
        id: 10,
        image: 'images/product11.png',
        title: 'Smart Phone Samsung',
        price: '25000'
    },
    {
        id: 11,
        image: 'images/product12.png',
        title: 'Smart Watch',
        price: '2000'
    },
    {
        id: 12,
        image: 'images/product13.png',
        title: 'Macbook 2015',
        price: '100000'
    },
    {
        id: 13,
        image: 'images/product14.png',
        title: 'Asus i5',
        price: '60000'
    },
    {
        id: 14,
        image: 'images/product15.png',
        title: 'Basket Adidas Sport',
        price: '14500'
    },
    {
        id: 15,
        image: 'images/product16.jpg',
        title: 'Casquette',
        price: '2200'
    },
    {
        id: 16,
        image: 'images/product17.jpg',
        title: 'Ensemble (Kids)',
        price: '8000'
    },
    {
        id: 17,
        image: 'images/product18.jpg',
        title: 'Ensemble Homme',
        price: '9800'
    },
    {
        id: 18,
        image: 'images/product19.jpg',
        title: 'Casquette',
        price: '1500'
    },
    {
        id: 19,
        image: 'images/product20.jpg',
        title: 'Watch',
        price: '2100'
    },
    {
        id: 20,
        image: 'images/product21.jpg',
        title: 'Casque lenovo',
        price: '2700'
    },
    {
        id: 21,
        image: 'images/product22.jpg',
        title: 'prada sac',
        price: '12000'
    },
    {
        id: 22,
        image: 'images/product23.jpg',
        title: 'Watch',
        price: '2400'
    },
    {
        id: 23,
        image: 'images/product24.jpg',
        title: 'Basket Femme',
        price: '3000'
    },
    {
        id: 24,
        image: 'images/product25.jpg',
        title: 'Pantalon BENETTEON',
        price: '3800'
    },
    {
        id: 25,
        image: 'images/product26.jpg',
        title: 'T-Chirt blue',
        price: '3000'
    },
    {
        id: 26,
        image: 'images/product27.png',
        title: 'Ballon (basket)',
        price: '9500'
    },
    {
        id: 27,
        image: 'images/product28.jpg',
        title: 'Watch',
        price: '4200'
    },
    {
        id: 28,
        image: 'images/product29.jpg',
        title: 'Chaussettes HRX',
        price: '200'
    },
    {
        id: 29,
        image: 'images/product30.png',
        title: 'Pantalon Jean',
        price: '4100'
    },
    {
        id: 30,
        image: 'images/product31.png',
        title: 'Chaussettes',
        price: '100'
    },
    {
        id: 31,
        image: 'images/product32.jpg',
        title: 'Basket HRX noir et blanc',
        price: '6000'
    },
    {
        id: 32,
        image: 'images/product33.jpg',
        title: 'Pantalon NIKE',
        price: '3700'
    },
    {
        id: 33,
        image: 'images/product34.jpg',
        title: 'T-Chirt Rouge',
        price: '1500'
    },
    {
        id: 34,
        image: 'images/product35.png',
        title: 'Smart phone iphone',
        price: '62000'
    },
    {
        id: 35,
        image: 'images/product36.png',
        title: 'Smart Phone Iphones',
        price: '21000'
    },
]            
const categories = [...new Set(product.map((items)=> {return items}))]
    let i=0;
document.getElementById('searchBar').addEventListener('keyup', (e)=>{
    const searchData = e.target.value.toLowerCase();
    const filterData = categories.filter((items)=>{
        return(
            items.title.toLocaleLowerCase().includes(searchData)
        )
    }) 
    displayItem(filterData)
});

const displayItem = (items)=> {
    document.getElementById('root').innerHTML=items.map((items)=>{
        var {image, title, price, N_telephone} = items;
        return(
            `<div class='box'> 
                <div class='img-box'>
                    <img class='images' src=${image}></img>
                </div>
                <div class='bottom'>
                    <p>${title}</p>
                    <p>Prix : <a class="prix">${price}.00 DA</a></p>
                    <p>N_telephone : <a class="telephone">${N_telephone}</a></p>`+
                    "<button class='button_add' onclick='addtocart("+(i++)+")'>Add to cart</button>"+
                `</div>
                </div>`
                
        )
    }).join('')
};
displayItem(categories);

var cart = [];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(a){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = " "+0+".00 DA";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total-(-price);
            document.getElementById("total").innerHTML = " "+total+".00 DA";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                     <img class='rowimg' src=${image}></img>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 class='prix' style='font-size:15px;'>${price}.00 DA</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            )
        }).join('');
}
}

