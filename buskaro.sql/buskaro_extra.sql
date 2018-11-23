
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus_instances`
--
ALTER TABLE `bus_instances`
  ADD CONSTRAINT `bus_instances_ibfk_1` FOREIGN KEY (`RID`) REFERENCES `routes` (`RID`),
  ADD CONSTRAINT `bus_instances_ibfk_2` FOREIGN KEY (`Capacity`) REFERENCES `routes` (`Capacity`),
  ADD CONSTRAINT `bus_instances_ibfk_3` FOREIGN KEY (`DepTime`) REFERENCES `routes` (`STime`);

--
-- Constraints for table `seat_matrix`
--
ALTER TABLE `seat_matrix`
  ADD CONSTRAINT `seat_matrix_ibfk_1` FOREIGN KEY (`RID`) REFERENCES `routes` (`RID`),
  ADD CONSTRAINT `seat_matrix_ibfk_2` FOREIGN KEY (`Passenger`) REFERENCES `passenger` (`ID`);
