/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
  ],
    daisyui: {
        themes: ["light", "dark"],
    },
  plugins: [require("daisyui")],
}
