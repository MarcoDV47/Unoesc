using Microsoft.AspNetCore.DataProtection.KeyManagement;
using Microsoft.AspNetCore.Http.HttpResults;
using System;
using System.ComponentModel.DataAnnotations.Schema;

namespace Veterinária.Models
{
    public class Vacine
    {
        public int Id { get; set; }
        public string? VacineName { get; set; }
        public int IdAnimal { get; set; }
        [ForeignKey(nameof(IdAnimal))]
        public DateTime DateAplication { get; set; }
    }
}
