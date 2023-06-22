const { createApp } = Vue;

createApp({

    data() {
        return {
            apiUrl: "api.php",
            cartItems: [],
        }
    },
    mounted() {
        console.log("ciao");
        this.getData();
    },
    methods: {
        getData() {
            axios.get(this.apiUrl).then((response) => {
                console.log(response.data);
                this.cartItems = response.data;
            });
        },
        addToCart(product) {
            this.cartItems.push(product);
        }
    }

}).mount("#app");