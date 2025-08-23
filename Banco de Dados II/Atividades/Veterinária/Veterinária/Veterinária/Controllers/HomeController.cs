using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using Veterinária.Data;
using Veterinária.Models;

namespace Veterinária.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;
        private readonly VetContext _context;

        public HomeController(
            ILogger<HomeController> logger,
            VetContext context
        )
        {
            _logger = logger;
            _context = context;
        }

        public IActionResult Index()
        {
            var animais = _context.Animals.Include(a => a.AnimalFamily).ToList();
            return View(animais);
        }

        public IActionResult Privacy()
        {
            return View();
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}
