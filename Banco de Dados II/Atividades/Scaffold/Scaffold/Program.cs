using Microsoft.EntityFrameworkCore;
using Scaffold.Data;

var builder = WebApplication.CreateBuilder(args);

// Add services to the container.
builder.Services.AddControllersWithViews();

var connString =
    builder.
    Configuration["EFDataBaseFirt:ConnString"];

// Fazemos a configuracao do DBContext com o banco de dados
// especifico, neste caso o sql server

builder.Services.AddDbContext<UnoescBd2Context>(
    o => o.UseSqlServer(connString)
);

var app = builder.Build();

// Configure the HTTP request pipeline.
if (!app.Environment.IsDevelopment())
{
    app.UseExceptionHandler("/Home/Error");
    // The default HSTS value is 30 days. You may want to change this for production scenarios, see https://aka.ms/aspnetcore-hsts.
    app.UseHsts();
}

app.UseHttpsRedirection();
app.UseRouting();

app.UseAuthorization();

app.MapStaticAssets();

app.MapControllerRoute(
    name: "default",
    pattern: "{controller=Home}/{action=Index}/{id?}")
    .WithStaticAssets();


app.Run();
