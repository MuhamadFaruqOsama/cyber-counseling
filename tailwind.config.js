import withMT from "@material-tailwind/html/utils/withMT";
 
/** @type {import('tailwindcss').Config} */
export default withMT({
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'custom-blue': '#329AFF',   
                'custom-white-30': '#ffffff50',
                'custom-blue-30' : '#3298ff3b'
              }
        },
    },
    plugins: [],
});