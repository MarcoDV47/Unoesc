using Veterinária.Models;
using Microsoft.EntityFrameworkCore;

namespace Veterinária.Data
{
    public class VetContext : DbContext
    {
            public VetContext(DbContextOptions<VetContext> options) : base(options)
            {
            }
            public DbSet<AnimalFamily> AnimalFamilys { get; set; }
            public DbSet<Animal> Animals { get; set; }

            public DbSet<Vacine> Vacines { get; set; }

            protected override void OnModelCreating(ModelBuilder modelBuilder)
            {
                modelBuilder.Entity<AnimalFamily>().ToTable("AnimalFamily");
                modelBuilder.Entity<Animal>().ToTable("Animal");
                modelBuilder.Entity<Vacine>().ToTable("Vacine");
            }
        }
    }
