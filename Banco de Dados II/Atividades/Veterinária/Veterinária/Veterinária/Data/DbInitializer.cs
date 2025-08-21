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
                new AnimalFamily{Id=1, Family="Suíno"},
                new AnimalFamily{Id=2, Family="Equino"},
                new AnimalFamily{Id=3, Family="Bovino"},
                new AnimalFamily{Id=4, Family="Galináceo"},
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
                new Animal{Id=1, Name="Alexander",DateBorn=DateTime.Parse("2005-09-01")},
                new Animal{Id=2, Name="Alonso",DateBorn=DateTime.Parse("2002-09-01")},
                new Animal{Id=3, Name="Anand",DateBorn=DateTime.Parse("2003-09-01")},
                new Animal{Id=4, Name="Barzdukas",DateBorn=DateTime.Parse("2002-09-01")},
                new Animal{Id=5, Name="Li",DateBorn=DateTime.Parse("2002-09-01")},
                new Animal{Id=6, Name="Justice",DateBorn=DateTime.Parse("2001-09-01")},
                new Animal{Id=7, Name="Norman",DateBorn=DateTime.Parse("2003-09-01")},
                new Animal{Id=8, Name="Olivetto",DateBorn=DateTime.Parse("2005-09-01")}
            };
            foreach (Animal a in animals)
            {
                context.Animals.Add(a);
            }
            context.SaveChanges();
        }
    }
}
