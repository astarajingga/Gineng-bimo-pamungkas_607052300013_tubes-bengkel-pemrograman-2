function getBotResponse(input) {
    // Simple responses
    if (input == "hello") {
        return "Hello there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "commands") {
        return "Keywords/Commands: <br/><br/> <strong>menu</strong> - it will show our menu. <br/> <strong>about</strong> - it will show the 'about us'. <br/> <strong>contact</strong>- it will show 'contact info'. <br/> <strong>commands</strong> - it will show 'keyword'. <br/> <strong>how to order</strong> - it will show the instruction. <br/> <strong>location</strong> - it will show our address.";
    } else if (input == "menu") {
        return "Here's our menu: <br /><br /> Toraja Coffee (12 Ons) - Rp.75.000 <br /> Kintamani Coffee (12 Ons) - Rp.70.000 <br /> Sidikalang Coffee (12 Ons) - Rp.65.000 <br /> Lampung Robusta Coffee (12 Ons) - Rp.50.000 <br /> Java Arabica Coffee (12 Ons) - Rp.80.000 <br /> West Java Coffee (12 Ons) - Rp.75.000 <br /> Wamena Coffee (12 Ons) - Rp.70.000 <br /> Gayo Coffee (12 Ons) - Rp.90.000 <br /> Luwak Coffee (12 Ons) - Rp.50.000<br /> Temanggung Coffee (12 Ons) - Rp.90.000 ";
    } else if (input == "about") {
        return "Hi there! <br /><br /> <strong>Laravel Coffee</strong> is a Company Coffee and retailer in Bandung, Indonesia.";
    } else if (input == "contact") {
        return "Here's our contact information: <br /><br /> <strong>Email:</strong> Laravelcoffee@gmail.com <br /> <strong>Phone Number:</strong> +62-895-3646-82628 <br /> <strong>Messenger:</strong> @Laravelcoffee <br /> <strong>Address:</strong> jalan raya Bojongsoang no.18, Bandung, Jawa Barat, Indonesia ";
    } else if (input == "how to order") {
        return "Hi There! <br /><br /> To order, you can go to our <strong>Menu</strong> section and click the <strong'Add to Cart'></strong> button of your choice. <br /><br /> I hope you understand. Thank you so much!";
    } else if (input == "location") {
        return "Here's our address: <strong>jalan raya Bojongsoang no.18, Bandung, Jawa Barat, Indonesia</strong>";

    /*
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    */
   
    } else {
        return "Try asking something else!";
    }
}