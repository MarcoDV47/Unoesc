using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using Dia_da_Semana.Models;

namespace Dia_da_Semana.Controllers;

public class HomeController : Controller
{
    private readonly ILogger<HomeController> _logger;

    public HomeController(ILogger<HomeController> logger)
    {
        _logger = logger;
    }

    public IActionResult Index()
    {
        return View();
    }

    private string[] weekDays = 
        [
        "Hoje é segunda-feira", 
        "Hoje é terça-feira",
        "Hoje é quarta-feira",
        "Hoje é quinta-feira", 
        "Hoje é sexta-feira",
        "Hoje é sábado",
        "Hoje é domingo"
        ];

    [HttpGet]
    public string GetWeekDayIf(int day)
    {
        int weekDay = day - 1;

        if (day == 7)
        {
            return weekDays[weekDay];
        }
        else if (day == 6)
        {
            return weekDays[weekDay];
        }
        else if (day == 5)
        {
            return weekDays[weekDay];
        }
        else if (day == 4)
        {
            return weekDays[weekDay];
        }
        else if (day == 3)
        {
            return weekDays[weekDay];
        }
        else if (day == 2)
        {
            return weekDays[weekDay];
        }
        else if (day == 1)
        {
            return weekDays[0];
        }
        else return "Erro: Dia da semana inválido";
        
    }

    [HttpGet]
    public string GetWeekDaySwitch(int day)
    {
        int weekDay = day - 1;

        switch (day)
        {
            case 7:
                return weekDays[weekDay];
            case 6:
                return weekDays[weekDay];
            case 5:
                return weekDays[weekDay];
            case 4:
                return weekDays[weekDay];
            case 3:
                return weekDays[weekDay];
            case 2:
                return weekDays[weekDay];
            case 1:
                return weekDays[weekDay];
            default:
                return "Erro: Dia da semana inválido";
        }
    }

    [HttpGet]
    public string GetWeekDaySimple(int day)
    {
        return weekDays[day - 1];
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
