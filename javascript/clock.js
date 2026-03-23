function updateClock() {
      const now = new Date();
      let hours = now.getHours();
      let minutes = now.getMinutes();

      document.getElementById('hours').textContent =
        hours.toString().padStart(2, '0');
      document.getElementById('minutes').textContent =
        minutes.toString().padStart(2, '0');
    }

    setInterval(updateClock, 1000);
    updateClock();