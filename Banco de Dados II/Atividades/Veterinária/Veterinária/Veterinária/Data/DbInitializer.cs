using Veterinária.Models;
using System.Diagnostics;

namespace Veterinária.Data
{
    public static class DbInitializer
    {
        public static void Initialize(VetContext context)
        {
            context.Database.EnsureCreated();

            // Look for any animal familys.

            if (context.AnimalFamilys.Any())
            {
                return;   // DB has been seeded
            }

            var animalFamilys = new AnimalFamily[]
            {
                new AnimalFamily{Family="Suíno"},
                new AnimalFamily{Family="Equino"},
                new AnimalFamily{Family="Bovino"},
                new AnimalFamily{Family="Galináceo"},
            };
            foreach (AnimalFamily a in animalFamilys)
            {
                context.AnimalFamilys.Add(a);
            }
            context.SaveChanges();

            // Look for any animal.

            if (context.Animals.Any())
            {
                return;   // DB has been seeded
            }

            var animals = new Animal[]
            {
                new Animal{Name="Alexander", AnimalFamily = animalFamilys[0],DateBorn=DateTime.Parse("2005-09-01")},
                new Animal{Name="Alonso", AnimalFamily = animalFamilys[2],DateBorn=DateTime.Parse("2002-09-01")},
                new Animal{Name="Anand", AnimalFamily = animalFamilys[3],DateBorn=DateTime.Parse("2003-09-01")},
                new Animal{Name="Barzdukas", AnimalFamily = animalFamilys[1],DateBorn=DateTime.Parse("2002-09-01")},
                new Animal{Name="Li", AnimalFamily = animalFamilys[0],DateBorn=DateTime.Parse("2002-09-01")},
                new Animal{Name="Justice", AnimalFamily = animalFamilys[4],DateBorn=DateTime.Parse("2001-09-01")},
                new Animal{Name="Norman", AnimalFamily = animalFamilys[5],DateBorn=DateTime.Parse("2003-09-01")},
                new Animal{Name="Olivetto", AnimalFamily = animalFamilys[2],DateBorn=DateTime.Parse("2005-09-01")}
            };
            foreach (Animal a in animals)
            {
                context.Animals.Add(a);
            }
            context.SaveChanges();
        }
    }
}
