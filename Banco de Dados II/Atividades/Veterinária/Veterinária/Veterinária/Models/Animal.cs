using System.Drawing;
using System;
using System.ComponentModel.DataAnnotations.Schema;

namespace Veterinária.Models
{
    public class Animal
    {
        public int Id { get; set; }
        public string? Name { get; set; }
        public int IdAnimalFamily { get; set; }
        [ForeignKey(nameof(IdAnimalFamily))]
        public DateTime DateBorn { get; set; }
    }
}