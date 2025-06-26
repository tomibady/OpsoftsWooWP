import forms from '@tailwindcss/forms';

module.exports = {
  content: ['./**/*.php', './src/**/*.{js,vue}'],
  theme: {
        extend: {
            fontFamily: {
                integral: ['Integral CF', 'serif'],
                manrope: ['Satoshi', 'sans-serif'],
            },
            colors:
            {
                'woolemon': '#4eff00',
                'herogray': '#F2F0F1',
            },
        },
    },

    plugins: [
        forms,
    ],
};