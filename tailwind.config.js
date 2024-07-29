/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js",
  ],
  theme: {
      extend: {},
      fontFamily: {
          roboto: ["Roboto", "sans-serif"],
          sansita: ["Sansita Swashed"],
      },
  },
  plugins: [require("flowbite/plugin")],
};
