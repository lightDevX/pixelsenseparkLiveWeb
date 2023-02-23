module.exports = {
  purge: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.jsx",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      fontFamily: {
        alata: ["Alata", "sans-serif"]
      },
      height: {
        "18": "5rem",
        "26": "7rem",
        "80": "20rem",
        "90": "30rem"
      }
    }
  },
  variants: {},
  plugins: [require("@tailwindcss/custom-forms")]
};
