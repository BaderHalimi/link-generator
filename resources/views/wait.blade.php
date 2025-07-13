<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page with Captcha</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="bg-white shadow-xl rounded-lg p-8 max-w-sm w-full text-center space-y-6">
    <h1 class="text-2xl font-bold text-purple-700">Complete Verification</h1>
    
    <p class="text-gray-600">Please enter the CAPTCHA to continue</p>
    
    <div class="flex items-center justify-center space-x-4">
      <div id="captcha-text" class="bg-gray-200 rounded-lg px-4 py-2 font-mono text-lg tracking-widest select-none">
        {{$capetcha}}
      </div>
      <button onclick="refreshCaptcha()" class="text-purple-600 hover:text-purple-800 text-sm">Refresh</button>
    </div>

    <input
      id="captcha-input"
      type="text"
      placeholder="Enter CAPTCHA"
      class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500"
    />

    <button id="verify-btn" onclick="verifyCaptcha()"
      disabled
      class="w-full bg-purple-400 text-white font-bold py-2 rounded-lg transition-colors duration-300 cursor-not-allowed"
    >
      Wait (<span id="timer">8</span>s)
    </button>

    <a id="redirect-btn"
      href="{{ route('redir', ['data' => $encrypted]) }}"
      class="hidden w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded-lg transition-colors duration-300 block text-center"
    >
      Redirect to
    </a>
  </div>

  <script>
    let seconds = 8;
    const timerEl = document.getElementById('timer');
    const captchaInput = document.getElementById('captcha-input');
    const redirectBtn = document.getElementById('redirect-btn');
    const captchaText = document.getElementById('captcha-text');
    const verifyBtn = document.getElementById('verify-btn');

    const correctCaptcha = @json($capetcha);
    console.log('Correct CAPTCHA:', correctCaptcha);

    const interval = setInterval(() => {
      seconds--;
      timerEl.textContent = seconds;

      if (seconds <= 0) {
        clearInterval(interval);
        verifyBtn.disabled = false;
        verifyBtn.textContent = 'Verify';
        verifyBtn.classList.remove('bg-purple-400', 'cursor-not-allowed');
        verifyBtn.classList.add('bg-purple-600', 'hover:bg-purple-700');
      }
    }, 1000);

    function verifyCaptcha() {
      const userInput = captchaInput.value.trim().toUpperCase();
      if (userInput === correctCaptcha.toUpperCase()) {
        redirectBtn.classList.remove('hidden');
      } else {
        alert('Incorrect CAPTCHA. Please try again.');
      }
    }

    function refreshCaptcha() {
      captchaInput.value = '';
      redirectBtn.classList.add('hidden');
    }
  </script>
</body>
</html>
