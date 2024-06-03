# RentoHome 🏠

Laipni lūgti RentoHome! Tavs galamērķis īres mājām un dzīvokļiem visā pasaulē 🌍. Izpēti mūsu pieejamās un elastīgās īres iespējas jau šodien. 🚀

## Iespējas 🌟
- 📅 Īrē dienā vai tik ilgi, cik vēlies.
- 💰 Sākot jau no 50 €/dienā.
- 🏠 Daudzveidīgs īpašumu piedāvājums visām taviem piedzīvojumiem.
- 🌐 Vieglā rezervācija tiešsaistē.
- 🆘 24/7 klientu atbalsts.
- 🔒 Droši un labi uzturēti īpašumi.

## Kā tas darbojas 🚀
1. 📝 Izveido kontu.
2. 🏠 Izvēlies savu māju vai dzīvokli.
3. 💳 Apstiprini un samaksā.
4. 🏁 Dodies ceļojumā!

## Sazinies ar mums 📞
Ir jautājumi? Sazinies ar mums!
- ✉️ E-pasts: [atbalsts@rentohome.com](mailto:atbalsts@rentohome.com)
- ☎️ Tālrunis: +371 12345678
- 📍 Adrese: 123 Spermail iela, Rentopils, Rentostate 🏙

Sāc savu ceļojumu ar RentoHome jau šodien! 🌟🏠💼

## Setup Instructions

### Prerequisites

Before getting started, make sure you have the following installed on your system:

- [PHP](https://www.php.net/) (>= 8.0)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (>= 16.x)
- [NPM](https://www.npmjs.com/) (usually comes with Node.js)

### Steps to Setup

1. Clone the repository:

    ```bash
    git clone https://github.com/Sssashko/RentoHome.git
    ```
    

2. Navigate to the project directory:

    ```bash
    cd RentoHomePHP
    ```

3. Install PHP dependencies:

    ```bash
    composer install
    ```

4. Install Node.js dependencies:

    ```bash
    npm install
    ```

5. Install Node.js dependencies:

   ```bash
   npm install axios
   ```

6. Create a copy of the .env.example file and rename it to .env:

    ```bash
    cp .env.example .env
    ```

7. Generate an application key:

    ```bash
    php artisan key:generate
    ```

8. Run database migrations:

    ```bash
    php artisan migrate
    ```

9. Download car images from the following link and copy them to the storage directory:

    [Houses Images](https://drive.google.com/drive/folders/1JlXCk-y1nhaOjR95UlQvWI4POhzJCYnM)

    After downloading, extract the images and copy the folder to: RentoHome/RentoHomePHP/public/

10. Compile assets (JavaScript, CSS, etc.):

    ```bash
    npm run dev
    ```

11. Start the development server:

    ```bash
    php artisan serve
    ```

    Your application will be available at http://localhost:8000.

12. Visit the application in your browser:

    Open your web browser and navigate to http://localhost:8000.

That's it! You should now have the project set up and running locally on your machine.
