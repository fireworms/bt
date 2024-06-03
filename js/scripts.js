/*!
* Start Bootstrap - Bare v5.0.9 (https://startbootstrap.com/template/bare)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-bare/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project
async function logout() {
    try {
        const response = await fetch('logout_proc.php', {
            method: 'POST',
            body: {},
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const result = await response.json();
        if (result.status == 'ok') {
            location.href = './index.php';
        }
        else {
            alert('아이디와 비밀번호를 확인해 주세요.');
        }
    } catch (error) {
        console.error('Error:', error);
    }
}