function onSuccessConfetti() {
    const defaults = {
        spread: 360,
        ticks: 50,
        gravity: 0,
        decay: 0.94,
        startVelocity: 30,
        shapes: ["star"],
        colors: ["FFE400", "FFBD00", "E89400", "FFCA6C", "FDFFB8"],
      };
      
      function shoot() {
        confetti({
          ...defaults,
          particleCount: 40,
          scalar: 1.2,
          shapes: ["star"],
        });
      
        confetti({
          ...defaults,
          particleCount: 10,
          scalar: 0.75,
          shapes: ["circle"],
        });
      }
      
      setTimeout(shoot, 0);
      setTimeout(shoot, 100);
      setTimeout(shoot, 200);
}

function showGif(fullName)
{
    document.getElementById('rating-form').remove();
    document.getElementById('card-title').innerText = `Thank-you for your submission ${fullName} - Your Rating Matters!`;
    const div = document.createElement('div');
    div.style.display = 'flex';
    div.style.justifyContent = 'center';
    const gif = document.createElement('img');
    [gif.src, gif.title] = ['./img/success.gif', 'Success!'];
    div.appendChild(gif);
    document.getElementById('card-title').parentElement.append(div);
}

document.getElementById('rating-form').querySelector('button[type="submit"]').addEventListener('click', (event) => {
    const {target} = event;
    const form = target.closest('form');
    const button = form.querySelector('button');
    const spinner = button.querySelector('div');
    
    button.disabled = true;
    spinner.classList.remove('d-none');

    if (!form.checkValidity()) {
        return form.reportValidity();
    }

    event.preventDefault();
    
    const fd = new FormData(form);
    const data = Object.fromEntries(fd.entries());
    const {fullName, email, rating} = data;

    if ((fullName && email && rating) && !isNaN(rating)) 
    {
        button.innerHTML = 'Success!';
        button.disabled = true;
        button.classList.remove('btn-primary');
        button.classList.add('btn-success');
        onSuccessConfetti();
        spinner.classList.add('d-none');
        
        setTimeout(() => {
            showGif(fullName);
        }, 1000);
    } 
    else 
    {
        spinner.classList.add('d-none');
        button.disabled = false;
    }
});